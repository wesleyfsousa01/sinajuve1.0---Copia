$(document).on('DOMContentLoaded', () => {
    $("#get").on("click", () => { makeRequest('get') });
    $("#post").on("click", () => { makeRequest('post') });
    $("#delete").on("click", () => { makeRequest('delete') });
    $("#put").on("click", () => { makeRequest('put') });
    $("#patch").on("click", () => { makeRequest('patch') });
});


function makeRequest(method){
    $.ajax({
        url: "/api/ping",
        method: method,
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        success: (response) => {
            $("#response").html(response);
        },
        error: (error) => {
            console.log(error)
        }
    });
}