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