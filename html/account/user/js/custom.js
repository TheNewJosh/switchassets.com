// alert('dsd');
document.getElementById("referral_link_p").onclick = () => {
    var range = document.createRange();
    range.selectNode(document.getElementById("referral_link"));
    window.getSelection().removeAllRanges(); // clear current selection
    window.getSelection().addRange(range); // to select text
    document.execCommand("copy");
    window.getSelection().removeAllRanges(); // to deselect
    $.toaster("Copied to clipboard");
};
document.getElementById("copy_code_btn").onclick = () => {
    var range = document.createRange();
    range.selectNode(document.getElementById("referral_code"));
    window.getSelection().removeAllRanges(); // clear current selection
    window.getSelection().addRange(range); // to select text
    document.execCommand("copy");
    window.getSelection().removeAllRanges(); // to deselect
    $.toaster("Copied to clipboard");
};
document.getElementById("copy_link_btn").onclick = () => {
    var range = document.createRange();
    range.selectNode(document.getElementById("referral_link"));
    window.getSelection().removeAllRanges(); // clear current selection
    window.getSelection().addRange(range); // to select text
    document.execCommand("copy");
    window.getSelection().removeAllRanges(); // to deselect
    $.toaster("Copied to clipboard");
};


// document.getElementById("copy_btc_address_btn").onclick = () => {
//     var range = document.createRange();
//     range.selectNode(document.getElementById("btc_address"));
//     window.getSelection().removeAllRanges(); // clear current selection
//     window.getSelection().addRange(range); // to select text
//     document.execCommand("copy");
//     window.getSelection().removeAllRanges(); // to deselect
//     $.toaster("Copied to clipboard");
// };

// document.getElementById("btc_address_p").onclick = () => {
//     var range = document.createRange();
//     range.selectNode(document.getElementById("btc_address"));
//     window.getSelection().removeAllRanges(); // clear current selection
//     window.getSelection().addRange(range); // to select text
//     document.execCommand("copy");
//     window.getSelection().removeAllRanges(); // to deselect
//     $.toaster("Copied to clipboard");
// };

