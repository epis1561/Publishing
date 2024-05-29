<link rel="stylesheet" href="/css/admMain.css">
<link rel="stylesheet" href="/css/theme2.css"/>
<?php
include('admHeader.php');
?>
<?php
include('admSidemenu.php');
?>
<div class="admWrap">
    <div class="adm0">
        <div class="adm0_flex">
            <div class="calendar" id="#foo">
    
            </div>
        </div>
    </div>
</div>
<script src='http://code.jquery.com/jquery-1.9.1.min.js'></script>
<script type="text/javascript" src="/js/caleandar.min.js"></script>
<script>
    var element = caleandar(document.getElementsByClassName('calendar')[0]);
var element = caleandar($('#foo'));
var events = {};
var settings={
    Color: '#999',                //(string - color) font color of whole calendar.
    LinkColor: '#333',            //(string - color) font color of event titles.
    NavShow: true,                //(bool) show navigation arrows.
    NavVertical: false,           //(bool) show previous and coming months.
    NavLocation: '#foo',          //(string - element) where to display navigation, if not in default position.
    DateTimeShow: true,           //(bool) show current date.
    DateTimeFormat: 'mmm, yyyy',  //(string - dateformat) format previously mentioned date is shown in.
    DatetimeLocation: '',         //(string - element) where to display previously mentioned date, if not in default position.
    EventClick: '',               //(function) a function that should instantiate on the click of any event. parameters passed in via data link attribute.
    EventTargetWholeDay: false,   //(bool) clicking on the whole date will trigger event action, as opposed to just clicking on the title.
    DisabledDays: [],             //(array of numbers) days of the week to be slightly transparent. ie: [1,6] to fade Sunday and Saturday.
    ModelChange: model            //(array of objects) new data object to pass into calendar (serving suggestion: passing through only the currently selected month's events if working with large dataset.
  }

    calendar();
</script>