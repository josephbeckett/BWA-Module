// User Management Tab on profile
$(document).ready(function(){
  $('#UserM').on('click', function(){
    $('#UserM').addClass('active');
    $('#SavedC').removeClass('active');
    $('#Searches').removeClass('active');
    $('#EditD').removeClass('active');
    $('#EditDForm').addClass('hidden');
    $('#TabTitle').text('User Information');
    $('#UserInfoBox').removeClass('hidden');
    $('#UserSavedCarsBox').addClass('hidden');
    $('#UserSearchBox').addClass('hidden');
  });
});
// Edtiting user details Tab on profile
$(document).ready(function(){
  $('#EditD').on('click', function(){
    $('#UserM').removeClass('active');
    $('#SavedC').removeClass('active');
    $('#Searches').removeClass('active');
    $('#EditD').addClass('active');
    $('#EditDForm').removeClass('hidden');
    $('#TabTitle').text('Edit Personal Details');
    $('#UserInfoBox').addClass('hidden');
    $('#UserSavedCarsBox').addClass('hidden');
    $('#UserSearchBox').addClass('hidden');
  });
});
// Displaying the user saved cars Tab on profile
$(document).ready(function(){
  $('#SavedC').on('click', function(){
    $('#UserM').removeClass('active');
    $('#SavedC').addClass('active');
    $('#Searches').removeClass('active');
    $('#EditD').removeClass('active');
    $('#EditDForm').addClass('hidden');
    $('#TabTitle').text('Favourite Cars');
    $('#UserInfoBox').addClass('hidden');
    $('#UserSavedCarsBox').removeClass('hidden');
    $('#UserSearchBox').addClass('hidden');
  });
});
// displaying the users recent and most popular searches tab
$(document).ready(function(){
  $('#Searches').on('click', function(){
    $('#UserM').removeClass('active');
    $('#SavedC').removeClass('active');
    $('#Searches').addClass('active');
    $('#EditD').removeClass('active');
    $('#EditDForm').addClass('hidden');
    $('#TabTitle').text('Searches');
    $('#UserInfoBox').addClass('hidden');
    $('#UserSavedCarsBox').addClass('hidden');
    $('#UserSearchBox').removeClass('hidden');
  });
});
