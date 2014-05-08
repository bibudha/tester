$(document).ready(function ()
{ /*Develoved By Tulip InfoTech*/
/*********************************************************************************************************************************/
$('nav#menu').mmenu({
	dragOpen	: true
});
$('nav#profile').mmenu({
	position	: 'right',
	classes	 : 'mm-light',
	dragOpen	: true,
	counters	: true,
	searchfield : true
});
/*********************************************************************************************************************************/
$("nav#menu a").each(function ()
{
	if (this.href == window.location.href)
	{
		$(this).parent('li').addClass('mm-selected Selected');
		$(this).removeAttr('href');
	}
});
/*********************************************************************************************************************************/
$('.Accordions').accordions({
	defaultOpen	: 'opened'
});
/*********************************************************************************************************************************/
$('.Collapsible').collapsible({
	loadClose  : function(obj)
	{
		$('.Collapsible').collapsible('openAll');
	}
});
/*********************************************************************************************************************************/
if($("#filters").css('display') == "block")
{
	$("#f_show").hide();
	$("#filler").click(function(){
	$("#f_show").toggle("slow");
	});
}
/*********************************************************************************************************************************/
$(".Content li").each(function()
{
	if($(this).find("ul").length)
	{
		$(this).addClass("erDrop");			
	}							
});
/*********************************************************************************************************************************/
var win = $(window).width();
if (win <= 980)
{
	var page_show = 1;
}
else
{
	var page_show = 4;
}
$("div.holder").jPages({
	containerID : "jPages",
	perPage     : page_show,
	previous    : "",
	next        : "",
	links       : "blank"
});
$("div.holder").find("a, span").not(".jp-previous,.jp-next").hide();
var hjPages = ($('#httt').height())*0.5;
var hbtPages = ($('.jp-next').height())*0.5;
var htPages = hjPages - hbtPages;
$(".jp-previous,.jp-next").css('top',htPages);
/*$(window).resize(function()
{
	var win = $(window).width();
	if (win <= 980)
	{
		var page_show = 1;
	}
	else
	{
		var page_show = 4;
	}
	$("div.holder").jPages("destroy");
	$("div.holder").jPages({
		containerID : "jPages",
		perPage     : page_show,
		links       : "blank",
		previous    : "",
		next        : ""
	});
	$("div.holder").find("a, span").not(".jp-previous,.jp-next").hide();		
});*/
/*********************************************************************************************************************************/
$("div.jumper").jPages({
	containerID : "Trial",
	perPage     : 1,
	previous    : "Previous",
	next        : "Next",
	links       : "blank"
});
/*********************************************************************************************************************************/
$("#my_tab .tab").hide();
$("#my_tab samp a").click (function ()
{
	$('#my_tab samp a').removeClass('selected');
	$(this).addClass('selected');
	$("#my_tab .tab").hide ();
	var verificaHorario = $(this).attr('id')
	$('#my_tab').find('div[id="' + verificaHorario + '"]').fadeIn();	 
});
$("#my_tab samp a:first").addClass('selected');
var verificaHorario = $("#my_tab samp a:first").attr('id')
$('#my_tab').find('.tab[id="' + verificaHorario + '"]').fadeIn();
/*********************************************************************************************************************************/
$(".follow_tab .tab").hide();
$(".follow_tab samp a").click (function ()
{
	$('.follow_tab samp a').removeClass('selected');
	$(this).addClass('selected');
	$(".follow_tab .tab").hide ();
	var verificaHorario = $(this).attr('id')
	$('.follow_tab').find('div[id="' + verificaHorario + '"]').fadeIn();	 
});
$(".follow_tab samp a:first").addClass('selected');
var verificaHorario = $(".follow_tab samp a:first").attr('id')
$('.follow_tab').find('.tab[id="' + verificaHorario + '"]').fadeIn();
/*********************************************************************************************************************************/
});(jQuery);/* document.ready Closed*/