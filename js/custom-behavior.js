var slidingTop = 0;
var slidingStep = 0;

$(window).on('load resize', function(){
  slidingStep = window.innerHeight;
});

$('#goHome').on('click', function(){
  $('.sliding-wrapper').css('top', 0);
});

$('#goForm, #goto-section2').on('click', function(){
  slideScreen(1);
});

$('#goData').on('click', function(){
  slideScreen(2);
});

function slideScreen(steps){
  slidingTop = (-1 * steps * slidingStep) + 'px';
  $('.sliding-wrapper').css('top', slidingTop);
}



// AJAX Requests
// necessary values
var url = 'https://lit-hollows-92518.herokuapp.com/registros';
var getData;
var getName;
var lastWeight = -1;


// POST Request
$('#insertButton').on('click', function(e){

  // requiring the data
  var name = $('#txtName').val().trim();
  var date = $('#txtDate').val().trim();
  var weight = $('#txtWeight').val();

  // validating the data
  if(name === '' || name === null || date === '' || date === null || weight === '' || weight === null){
    alert('ERROR: PLEASE ENTER A VALUE IN ALL FIELDS');
    return;
  }

  // creating the data object setting
  var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://lit-hollows-92518.herokuapp.com/registros",
    "method": "POST",
    "headers": {
      "content-type": "application/json",
      "cache-control": "no-cache"
    },
    "processData": false,
    "data": "{\n\t\"nombre\": \"" + name + "\",\n\t\"fecha\": \"" + date + "\",\n\t\"peso\": \"" + weight + "\"\n}"
  };

  // making the request
  $.ajax(settings).done(function (response) {
    console.log(response);
  });

  // cleaning the request and showing message
  $('#txtName').val('');
  $('#txtDate').val('');
  $('#txtWeight').val('');

  alert('SUCCESS: The Insertion was done correctly');
});



// GET Requests
$('#viewButton').on('click', function(){

  // this request comes in two forms: all rows and rows by user
  // if the name input has value, we use the second outline
  getName = $('#txtName').val();
  var allBased = (getName === '' || getName === null || getName === undefined);

  // then make the request
  if(allBased){
    $.ajax(url, {
      method: 'GET',
      success: function(res, xhr, err){
        getData = res;
        $('#dataRowContainer').html('');
        $.each(getData, function(index, value){
          createRow(value, false);
        });
        slideScreen(2);
      }
    });
  } else {
    $.ajax(url + '/' + getName, {
      method: 'GET',
      success: function(res, xhr, err){
        getData = res;
        $('#dataRowContainer').html('');
        lastWeight = -1;
        $.each(getData, function(index, value){
          createRow(value, true);
        });
        slideScreen(2);
      }
    });
  }
});


function createRow(rowValue, colorRow){
  var row = $('<div class="row data-row"></div>');
  if(rowValue.nombre === "Yeli") { row.addClass('y-row'); }
  if(rowValue.nombre === "Alan") { row.addClass('a-row'); }

  row.append( $('<div class="col-xs-4 data-col"> <p> ' + rowValue.nombre + ' </p> </div>') );
  row.append( $('<div class="col-xs-4 data-col"> <p> ' + rowValue.fecha + ' </p> </div>') );
  var weightData = $('<div class="col-xs-4 data-col w-col"> <p> ' + rowValue.peso + ' </p> </div>');

  if(colorRow){
    if(lastWeight !== -1){
      var currentWeight = Number(rowValue.peso);
      if(currentWeight < lastWeight) weightData.addClass('w-green');
      if(currentWeight > lastWeight) weightData.addClass('w-red');
    }
    lastWeight = rowValue.peso;
  }

  row.append(weightData);

  row.append( $('<div class="delete-record" data-id="' + rowValue._id + '"> <i class="fa fa-minus"></i> </div>') );
  $('#dataRowContainer').append(row);
}



// DELETE Request
$('#dataRowContainer').on('click', '.delete-record', function(){

  if( confirm('WARNING: Are you sure you want to delete that record?') ){
    // grab the id
    var id = $(this).attr('data-id');

    // make the request
    $.ajax(url + '/' + id, {
      method: 'DELETE',
      success: function(res, xhr, err){
        $('#viewButton').trigger('click');
      }
    });
  }
});










//
