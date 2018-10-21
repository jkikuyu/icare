$(document).on("click", ".pending_claims", function() {
	let claim_id_attr = $(this).data('id');
	$.ajax({
	    type: "POST",
	    url: site_url + "/home/pending_claims_view/",
	    data: {claim_id: claim_id_attr},
	    success: function(data) {
	        console.log(data);
	        $("#modal_large .modal-body").html(data);
	    }
	 });
});


$(document).on("click", ".complete_claims", function() {
    let claim_id_attr = $(this).data('id');
    $.ajax({
        type: "POST",
        url: site_url + "/home/complete_claims_view/",
        data: {claim_id: claim_id_attr},
        success: function(data) {
            console.log(data);
            $("#modal_large .modal-body").html(data);
        }
     });
});





$(document).on("click", ".insured-assets-dropdown-toggle", function() {
    let data_id_string = $(this).data('id');
    data_id_string = data_id_string.split('#');
    let asset_id = data_id_string[0];
    let asset_type = data_id_string[1];
    let asset_name = data_id_string[2];
    let user_id = data_id_string[3];
    let post_data = null;

    //alter modal heading
    $("#insured_asset_details .modal-header").html('<h2>' + asset_type + ': ' + asset_name + ' details </h2>');
    /*
    * Load All Assets details content
    * using controller assetDetails
    */
    let controller = '/home/assetDetails/';
    let contentURI= site_url + controller + user_id + '/' + asset_id + '/';
    $.ajax({
        type: 'GET',
        url: contentURI,
        data: post_data,
        success: function (response){
            //console.log(response);
            $("#insured_asset_details .modal-body").html(response);
        }

    });
});

$(document).on("click", ".view_claim_details", function() {
    let claim_id_attr = $(this).data('id');
    // $("#modal_large .modal-header").html('<h2>Claim Details</h2>');
	$.ajax({
	    type: "POST",
	    url: site_url + "/home/view_claim_details_ajax",
	    data: {claim_id: claim_id_attr},
	    success: function(data) {
	        console.log(data);
	        $("#modal_large .modal-body").html(data);
	    }
	 });
});

$(document).on("click", ".pending_claims", function() {
    let claim_id_attr = $(this).data('id');
    $.ajax({
        type: "POST",
        url: site_url + "/home/pending_claims_view/",
        data: {claim_id: claim_id_attr},
        success: function(data) {
            console.log(data);
            $("#modal_large .modal-body").html(data);
        }
     });
});


$(document).on("click", ".paid_claims", function() {
    let claim_id_attr = $(this).data('id');
    $.ajax({
        type: "POST",
        url: site_url + "/home/paid_claims_view/",
        data: {claim_id: claim_id_attr},
        success: function(data) {
            console.log(data);
            $("#modal_large .modal-body").html(data);
        }
     });
});


$(document).on("click", ".rejected_claims", function() {
    let claim_id_attr = $(this).data('id');
    $.ajax({
        type: "POST",
        url: site_url + "/home/rejected_claims_view/",
        data: {claim_id: claim_id_attr},
        success: function(data) {
            console.log(data);
            $("#modal_large .modal-body").html(data);
        }
     });
});