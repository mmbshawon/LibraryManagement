$(document).ready(function(){
		$("#WarningForTrial").modal('show');
	});
/*------------head logo slider start------*/
$(document).ready(function () {
	jssor_1_slider_init();
});
/*------------head logo slider End------*/

/*------------borrow checkbox limitation start------*/
$('input[type=checkbox]').on('change', function (e) {
    if ($('input[type=checkbox]:checked').length > 1) {
        $(this).prop('checked', false);
        alert("allowed only 1 to selecte at a time.");
    }
});
/*------------borrow checkbox limitation End------*/
/*------------navbar active start------*/
$(document).ready(function () {
    var url = window.location;
    // Will only work if string in href matches with location
    $('ul.nav a[href="' + url + '"]').parent().addClass('active');

    // Will also work for relative and absolute hrefs
    $('ul.nav a').filter(function () {
        return this.href == url;
    }).parent().addClass('active').parent().parent().addClass('active');
});
/*------------navbar active End------*/

/*------------navbar hover start------*/
$(document).ready(function () {
    $('.nav li').hover(
    function () {
        $('ul', this).stop().slideDown(300);
    },
    function () {
        $('ul', this).stop().slideUp(300);
    }
    );
    $('.nav li:has(> ul)').addClass('HasChild');
});	
/*------------navbar hover End------*/

/*------------Borrow Name Choozen start------*/
$(function() {
$(".chzn-select").chosen();
});
/*------------Borrow Name Choozen End------*/

/*------------Table search filter Start-----------*/
$(document).ready(function() {
	$('table').filterForTable();
});
/*------------Table search filter End-----------*/

/*------------Table search and plugin Start-----------*/
$(document).ready(function() {
    $('#example').DataTable();
} );
/*------------Table search and plugin End-----------*/
/*------------Borrow datepicker start------*/
$('#dateselect').datepicker({
	format:'yyyy-mm-dd',
	todayHighlight:'TRUE',
	startDate: 'NOW()',
    endDate: '+6d',
	autoclose: true,
});
/*------------Borrow datepicker End------*/
$(':checkbox').checkboxpicker();


