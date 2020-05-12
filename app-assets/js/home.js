localStorage.clear();
var arr = [];
var new_arr = [];
var status = 0;
var id;
var box_id;
var right_ans;
var result = 0;
var right_ans_index;
var user_ans_index;
$(document).ready(function () {
    $.ajax({
        url: "../controller/generate_question.php",
        success: function (response) {
            resp_data = JSON.parse(response);
            // console.log(response);

            var new_data = resp_data.data;
            var temp = [];
            var temp1 = [];
            var temp2 = [];
            for (var i = 0; i < new_data.length; i++) {
                temp.push(new_data[i].c_id, new_data[i].c_name)
                var question = new_data[i].questions;
                for (var k = 0; k < question.length; k++) {
                    temp1.push(question[k].q_id, question[k].q_title, question[k].op_a, question[k].op_b, question[k].op_c, question[k].op_d, status, question[k].ans_id);
                    temp2.push(temp1);
                    temp1 = [];
                }
                temp.push(temp2);
                temp2 = [];
                arr.push(temp);
                temp = [];
            }
        }
    });
});

function showQues(cat_id, cat_name, q_index, div_id, main_div, title, mcq_a, mcq_b, mcq_c, mcq_d, check_mcq_a, check_mcq_b, check_mcq_c, check_mcq_d) {
    $("input:radio[name=" + cat_name + "]").prop('checked', false);
    box_id = div_id;
    $('.dynamic_btn').remove();
    var q_id = arr[cat_id][2][q_index][0];
    var q_title = arr[cat_id][2][q_index][1];
    var option_a = arr[cat_id][2][q_index][2];
    var option_b = arr[cat_id][2][q_index][3];
    var option_c = arr[cat_id][2][q_index][4];
    var option_d = arr[cat_id][2][q_index][5];
    var q_right_ans = arr[cat_id][2][q_index][6];
    $('#' + main_div).show();
    $('#' + title).html(q_title);
    $('#' + mcq_a).html(option_a);
    $('#' + mcq_b).html(option_b);
    $('#' + mcq_c).html(option_c);
    $('#' + mcq_d).html(option_d);
    $('#' + check_mcq_a).val(option_a);
    $('#' + check_mcq_b).val(option_b);
    $('#' + check_mcq_c).val(option_c);
    $('#' + check_mcq_d).val(option_d);
    id = q_id;
    right_ans = q_right_ans;
    status++;
    var btn = `<button class="btn btn-primary dynamic_btn" onclick=saveData(${cat_id},'${cat_name}',${q_index},${div_id},'${title}','${mcq_a}','${mcq_b}','${mcq_c}','${mcq_d}')>Submit</button>`;
    $('#' + main_div).append(btn);
    prev_id = parseInt(div_id) - 1;
    next_id = parseInt(div_id) + 1;
    next_box_id = parseInt(q_index) + 1;
    prev_box_id = parseInt(q_index) - 1;
    if (div_id == 9 || div_id == 19 || div_id == 29) {
        // no next button
    } else {
        var btn = `<button class="btn btn-primary dynamic_btn ml-1" onclick=showQues(${cat_id},'${cat_name}',${next_box_id},${next_id},'${main_div}','${title}','${mcq_a}','${mcq_b}','${mcq_c}','${mcq_d}','${check_mcq_a}','${check_mcq_b}','${check_mcq_c}','${check_mcq_d}')>Next</button>`;
        $('#' + main_div).append(btn);
    }
    if (div_id == 0 || div_id == 10 || div_id == 20) {
        // no preivious button
    } else {
        var btn = `<button class="btn btn-primary dynamic_btn ml-1" onclick=showQues(${cat_id},'${cat_name}',${prev_box_id},${prev_id},'${main_div}','${title}','${mcq_a}','${mcq_b}','${mcq_c}','${mcq_d}','${check_mcq_a}','${check_mcq_b}','${check_mcq_c}','${check_mcq_d}')>Previous</button>`;
        $('#' + main_div).append(btn);
    }
}
var main_arr = [];

function saveData(cat_id, cat_name, q_index, div_id, question_title, label_1, label_2, label_3, label_4) {
    var question = $('#' + question_title).html();
    var op_a = $('#' + label_1).html();
    var op_b = $('#' + label_2).html();
    var op_c = $('#' + label_3).html();
    var op_d = $('#' + label_4).html();
    question_details = [];
    question_details.push(cat_id, cat_name, id);
    var user_selected_ans;
    question_details.push(question, op_a, op_b, op_c, op_d, status);
    arr[cat_id][2][q_index][6] = "1"
    var ele = document.getElementsByName(cat_name);
    for (i = 0; i < ele.length; i++) {
        if (ele[i].checked) {
            user_selected_ans = ele[i].value;
            status++;
            arr[cat_id][2][q_index][6] = "2";
            question_details[8] = "2";
        }
    }
    question_details.push(right_ans);
    arr[cat_id][2][q_index].push(user_selected_ans);
    main_arr.push(question_details);
    window.localStorage.setItem('question', main_arr);
    if (arr[cat_id][2][q_index][6] == "2") {
        $('#' + div_id).css("background-color", "green");
    } else if (arr[cat_id][2][q_index][6] == "1") {
        $('#' + div_id).css("background-color", "red");
    }
    if (arr[cat_id][2][q_index][7] == arr[cat_id][2][q_index][8]) {
        result++;
    }
    for (var i = 2; i < 6; i++) {
        if (arr[cat_id][2][q_index][i] == arr[cat_id][2][q_index][7]) {
            var right_ans_index = i - 1;
        } else if (arr[cat_id][2][q_index][i] == arr[cat_id][2][q_index][8]) {
            var user_ans_index = i - 1;
        }
    }
    if (user_ans_index == null) {
        user_ans_index = right_ans_index;
    }
    arr[cat_id][2][q_index].push(right_ans_index, user_ans_index);
    var result_arr = [];
    result_arr.push(arr);
    window.localStorage.setItem('question_details', JSON.stringify(result_arr));
}

function printResult() {
    $.confirm({
        type: 'green',
        title: 'Submit!',
        content: 'Do you want to submit the test',
        buttons: {
            confirm: function () {
                $.alert('Submitted the test');
                setInterval(function () {
                    window.location.href = `result.php?result=${result}`;
                }, 2000)
            },
            cancel: function () {
                $.alert('Canceled!');
            }
        }
    });
}

// countdown timer
var time = $('#time').val();
time = time * 30;
var min = time / 60;
var interval;
var minutes = min; //per question 1 minute
var seconds = 00;
window.onload = function () {
    countdown('countdown');
}

function countdown(element) {
    interval = setInterval(function () {
        var el = document.getElementById(element);
        if (seconds == 0) {
            if (minutes == 0) {
                el.innerHTML = "Time over!";
                 setInterval(function () {
                     window.location.href = `result.php?result=${result}`;
                 }, 500)
                clearInterval(interval);
                return;
            } else {
                minutes--;
                seconds = 60;
            }
        }
        if (minutes > 0) {
            var minute_text = minutes;
        } else {
            var minute_text = '';
        }
        var second_text = seconds;
        el.innerHTML = minute_text + ':' + seconds + ' ' + 'remaining';
        seconds--;
    }, 1000);
}