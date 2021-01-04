// submit the form to RexCRM
if (_email != '' & _name != '' & _number != '') {

    var apiUrl = 'https://api.rexcrm.com/leads';

    var formJSON = {
        source: _source,
        medium: _medium,
        campaign: _campaign,
        email: _email,
        name: _name,
        mobile: _number,
        enquiry: _enquiry,
        listing_reference: '', // Keep this listing reference here
        campaign_id: _campaign_id // Keep the Campaign ID here
    };

    var request = jQuery.ajax({
        url: apiUrl,
        method: 'POST',
        contentType: 'application/json',
        crossDomain: false,
        dataType: 'json',
        data: JSON.stringify(formJSON)
    });

    request.done(function(response, textStatus, jqXHR) {
        console.log('Data Forwarded to RexCRM');
    });

    request.fail(function(jqXHR, textStatus, errorThrown) {
        console.log(textStatus + "/" + errorThrown);
    });

} else {
    console.log("No Data to Propcess");
}