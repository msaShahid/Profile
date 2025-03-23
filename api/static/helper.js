//jQuery POST AJAX
function pAjax(send_to, form_id, result_div_id, hide_form, callBackFunction)
{
    // if(document.getElementById(result_div_id).innerHTML == '')
    document.getElementById(result_div_id).innerHTML = '<div class="progress progress-striped active"><div style="width: 100%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" role="progressbar" class="progress-bar progress-bar-info"><i class="fa fa-exclamation-triangle"></i> Please wait </div></div>';

    $.post( send_to, $( "#"+form_id ).serialize() )
        .done(function( data )
        {
            document.getElementById(result_div_id).innerHTML = data;
            if (hide_form === true)
            {
                document.getElementById(form_id).innerHTML = "";
            }
            if (typeof callBackFunction !== 'undefined')
                window[callBackFunction]();
        })
        .fail(function ()
        {
            document.getElementById(result_div_id).innerHTML = '<div class="alert alert-danger" style="padding:5px"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">Ã—</button>Network error</div>';
        });
}

//jQuery GET AJAX
function gAjax(send_to, result_div_id, should_concat)
{
    $.get( send_to, function( data ) {
        if(should_concat)
            $( "#"+result_div_id ).append( data );
        else
            $( "#"+result_div_id ).html( data );
    });
}

//jQuery Recall Ajax
function rAjax(send_to, result_div_id, recall_interval, callBackFunction)
{
    $.get( send_to, function( data ) {
        $( "#"+result_div_id ).html( data );
        if (typeof callBackFunction !== 'undefined') {
            window[callBackFunction]();

            if (recall_interval > 0)
                setTimeout("ajax( '" + send_to + "', '" + result_div_id + "'," + recall_interval + ",'" + callBackFunction + "')", recall_interval);
        }
        else if (recall_interval > 0)
            setTimeout("rAjax( '" + send_to + "', '" + result_div_id + "'," + recall_interval + ")", recall_interval);
    });
}

// PURE JAVASCRIPT AJAX
function ajax(queryString, outputDiv, recallInterval, callBackFunction)
{
    let xmlHttp;
    try
    {
        xmlHttp = new XMLHttpRequest();
    }
    catch (e)
    {
        try
        {
            xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
        }
        catch (e)
        {
            try
            {
                xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            catch (e) {
                alert("Your browser does not support AJAX!");
                return false;
            }
        }
    }
    xmlHttp.onreadystatechange = function ()
    {
        if ((xmlHttp.readyState === 4) && (xmlHttp.status === 200))
        {
            document.getElementById(outputDiv).innerHTML = xmlHttp.responseText;
            if (typeof callBackFunction !== 'undefined')
            {
                window[callBackFunction]();
                if (recallInterval > 0)
                    setTimeout("ajax( '" + queryString + "', '" + outputDiv + "'," + recallInterval + ",'" + callBackFunction + "')", recallInterval);
            }
            else
            {
                if (recallInterval > 0)
                    setTimeout("ajax( '" + queryString + "', '" + outputDiv + "'," + recallInterval + ")", recallInterval);
            }
        }
    };

    xmlHttp.open("GET", queryString, true);
    xmlHttp.setRequestHeader("X-Requested-With", "XMLHttpRequest");
    xmlHttp.send(null);

    return true;
}

/**
 * Splash popup
 * Ex: ajax('<?php echo base_url('controller/method');?>', 'splash', 0, 'splashChecker');
 * TODO: FIX IT AS RE-CALLING ARCHITECTURE
 */
function splashChecker()
{
    let splash = $("#splash");
    splash.fadeIn();
    setTimeout(function () {
        splash.fadeOut(1500);
    }, 6000);
}

// SHOW MODAL
function modal(url, heading)
{
    url = url+'&&time='+ new Date().getTime();
    $("#myModal").modal('show');
    $("#myModalHeading").html(heading);
    $("#myModalBody" ).html('<div class="modal-body"><div class="progress progress-striped active"><div style="width: 100%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" role="progressbar" class="progress-bar progress-bar-info"><i class="fa fa-exclamation-triangle"></i> Please wait </div></div></div>');
    $("#myModalBody").load(url, function (response, status, xhr) {if (status=="error") {$( "#myModalBody" ).html( "<div class=\"modal-body\">Error occurred: " + xhr.status + " " + xhr.statusText + "</div>");}});
}

// COUNTDOWN
function countDown(targetTimestamp, result_div_id)
{
    var targetTimestamp = parseInt(targetTimestamp)*1000;

    var x = setInterval(function() {
        var now = new Date().getTime();
        var distance = targetTimestamp - now;
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById(result_div_id).innerHTML = days + "d " + hours + "h "
            + minutes + "m " + seconds + "s ";

        if (distance < 0) {
            clearInterval(x);
            document.getElementById(result_div_id).innerHTML = "EXPIRED";
        }
    }, 1000);
}

// SCROLL TO DIV ID
function goToDivId(divId)
{
    $('html, body').animate({
        scrollTop: $("#"+divId).offset().top
    }, 2000);
}
