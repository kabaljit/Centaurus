// Reveal / hide new worklog table using css display property
const newWorklog = () => {

    let newWorklog = document.getElementById("new-worklog")
    
    if(newWorklog.style.display == 'none'){
        newWorklog.style.display = 'block'
    }
    // else{
    //     newWorklog.style.display = 'none'
    // }

}

const addWorklog = () => {

    let prepend = 'new-worklog'
    let inputs = ['issue', 'start', 'end', 'description', 'duration']
    let template = document.getElementsByClassName("worklog-1").cloneNode(true)

    inputs.forEach( (input) => {
        inputcomb = prepend + input
        let value = document.getElementById(inputcomb).innerText
        let injectInto = template.querySelector(`[name=worklog-1-${input}]`);
        injectInto.innerText = value
    } )

}



var $collectionHolder;

// setup an "add a tag" link
var $addTagButton = $('<button type="button" class="add_tag_link">Add a tag</button>');
var $newLinkLi = $('<tr><td></td></tr>').append();

jQuery(document).ready(function() {
    // Get the ul that holds the collection of tags
    $collectionHolder = $('tbody.worklogs');

    // add the "add a tag" anchor and li to the tags ul
    $collectionHolder.append($newLinkLi);

    // count the current form inputs we have (e.g. 2), use that as the new
    // index when inserting a new item (e.g. 2)
    $collectionHolder.data('index', $collectionHolder.find(':input').length);
    $('.add_tag_link').on('click', function(e) {

        // add a new tag form (see next code block)
        addTagForm($collectionHolder, $newLinkLi);
    });

    $('.timesheet-switch .btn').on("click", function (e){
        e.preventDefault();
        console.log('Mates');
        window.location = "/timesheet/approve";

    });

    $("#input-timesheetDate").on('change', function(){
        window.location = "/timesheet/date/"+$("#input-timesheetDate").val();
    });


});

function addTagForm($collectionHolder, $newLinkLi) {
    // Get the data-prototype explained earlier
    var prototype = $collectionHolder.data('prototype');
    console.log('eres');
    // get the new index
    var index = $collectionHolder.data('index');

    var newForm = prototype;
    // You need this only if you didn't set 'label' => false in your tags field in TaskType
    // Replace '__name__label__' in the prototype's HTML to
    // instead be a number based on how many items we have
    // newForm = newForm.replace(/__name__label__/g, index);

    // Replace '__name__' in the prototype's HTML to
    // instead be a number based on how many items we have
    newForm = newForm.replace(/__name__/g, index);
    newForm = newForm.replace(/<div>/g, "<td><div>");
    newForm = newForm.replace('<div id="timesheet_form_worklogs_'+index+'">','');
    newForm =newForm + "<td id='worklog-trash-"+index+"'><div><i onclick=\"removeWorklogJs("+index+")\" data-toggle=\"tooltip\" title=\"Remove\" class=\"fas fa-trash\"></i></div> </td>";
    // increase the index with one for the next item
    $collectionHolder.data('index', index + 1);

    // Display the form in the page in an li, before the "Add a tag" link li
    var $newFormLi = $('<tr></tr>').append(newForm);
    $newLinkLi.before($newFormLi);
}


function removeWorklog(timesheetId, worklogId){


    $.ajax({
        url:        '/timesheet/'+timesheetId+'/removeworklog/'+worklogId,
        type:       'POST',
        dataType:   'json',
        async:      true,

        success: function(data, status) {
            console.log(data);
            console.log(data.removeWorklog);
            $("#worklog-"+data.removeWorklog).remove();
        },
        error : function(xhr, textStatus, errorThrown) {
            alert('Ajax request failed.');
        }
    });

}

function approveTimesheet(userId, weekDate){

    $.ajax({
        url:        '/user/'+userId+'/approveWeekly/'+weekDate+'/approved',
        type:       'POST',
        dataType:   'json',
        async:      true,
        success: function(data, status) {
            console.log(data);
            if (data.success === true){
                $('.timesheet-row-'+userId+' .approval-buttons-action').html('<span>Approved</span>')
            }


        },
        error : function(xhr, textStatus, errorThrown) {
            alert('Ajax request failed.');
        }
    });

}

function toogleDetails(userId){
    $timsheet = $('.timesheet-row-'+userId+'+ .timesheet-worklog')


    if($timsheet.css('display') === 'none'){
        $timsheet.show()
    }
    else{
        $timsheet.hide();
    }
}


function declineTimesheet(userId, weekDate){

    $.ajax({
        url:        '/user/'+userId+'/approveWeekly/'+weekDate+'/rejected',
        type:       'POST',
        dataType:   'json',
        async:      true,
        success: function(data, status) {
            console.log(data);
            console.log(data.removeWorklog);
            $("#worklog-"+data.removeWorklog).remove();
        },
        error : function(xhr, textStatus, errorThrown) {
            alert('Ajax request failed.');
        }
    });

}

function removeWorklogJs(clickedId){
    console.log(clickedId);
    clickedTd= $('#worklog-trash-'+clickedId);
    clickedTd.parent().remove();
}


function copyWorklog (worklogId){

    console.log(worklogId);
    // Get the ul that holds the collection of tags
    $collectionHolder = $('tbody.worklogs');
    $('.timesheet-newWorklog').show();
    // add the "add a tag" anchor and li to the tags ul
    $collectionHolder.append($newLinkLi);

    // count the current form inputs we have (e.g. 2), use that as the new
    // index when inserting a new item (e.g. 2)
    $collectionHolder.data('index', $collectionHolder.find(':input').length);
    // add a new tag form (see next code block)
    addTagForm($collectionHolder, $newLinkLi);
    index = $collectionHolder.data('index')-1;

    // $timesheetTbody.each(function(){
    trClass = 'worklog-'+worklogId;
    issueText = $('#'+trClass+"-issue").text();
    $('#timesheet_form_worklogs_'+index+'_issue').val(issueText);

    startText = $('#'+trClass+"-start").text();
    $('#timesheet_form_worklogs_'+index+'_start').val(startText);

    endText = $('#'+trClass+"-end").text();
    $('#timesheet_form_worklogs_'+index+'_end').val(endText);

    durationText = $('#'+trClass+"-duration").text();
    $('#timesheet_form_worklogs_'+index+'_duration').val(durationText);

    descriptionText = $('#'+trClass+"-description").text();
    $('#timesheet_form_worklogs_'+index+'_description').val(descriptionText);

    // });
}

