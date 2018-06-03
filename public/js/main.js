$('#my_progress').appear();

function my_progress(barID, value) {
$(barID).delay(500).animate({'width': value
}, 500);
}
$('#my_progress').on('appear', function () {
my_progress('#bar1', '80%');
my_progress('#bar2', '70%');
my_progress('#bar3', '70%');
my_progress('#bar4', '50%');
my_progress('#bar5', '70%');
my_progress('#bar6', '70%');
my_progress('#bar7', '60%');
my_progress('#bar8', '50%');
});
