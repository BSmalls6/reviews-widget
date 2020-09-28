$(document).ready(function() {
    event.preventDefault();
    getReviews();
})

function getReviews() {
    var location = [];
    var accountId = [];

    var queryUrl = "https://mybusiness.googleapis.com/v4/accounts/" + accountId + "/locations/" + location + "/reviews";

    $.ajax({
        url: queryUrl,
        method: "GET"
    }).then(function(allReviews) {
        console.log(allReviews);



    })
}