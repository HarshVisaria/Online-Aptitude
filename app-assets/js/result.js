 var result_data = JSON.parse(localStorage.getItem('question_details'));
 var question_arr = [];
 var arr_len = [];
 var temp_arr = [];
 console.log(result_data);

 for (var i = 0; i < 3; i++) {
     arr_len.push(result_data[0][i][2]);
     console.log(result_data[0][i][2]);
     temp_arr.push(arr_len);
     arr_len = [];
 }
 var temp3 = [];
 console.log(temp_arr);
 result_data = $('#result').html();
 for (var j = 0; j < temp_arr.length; j++) {
     // alert(temp_arr.length)
     for (var k = 0; k < temp_arr[j].length; k++) {
         var append_ele = [];
         var temp2 = [];
         temp2.push(temp_arr[j][k])
         // temp3.push(temp2)
         console.log(temp_arr[j]);

         // temp2 = [];
         for (var k = 0; k < temp2[0].length; k++) {
             //console.log(temp2[0][k]);
             append_ele.push(temp2[0][k]);
             if (append_ele[0].length < 11)
                 $('#result-table').append('<p class="mb-0" style="color:yellow">' + append_ele[0][1].toString() + '</p>');
             else
                 $('#result-table').append('<p class="mb-0">' + append_ele[0][1].toString() + '</p>');

             if (append_ele[0][9] == append_ele[0][10]) {
                 if (append_ele[0][9] == 1)
                     $('#result-table').append('<p class="mb-0" style="color:green">' + append_ele[0][2].toString() + '</p>');
                 else
                     $('#result-table').append('<p class="mb-0">' + append_ele[0][2].toString() + '</p>');

                 if (append_ele[0][9] == 2)
                     $('#result-table').append('<p class="mb-0" style="color:green">' + append_ele[0][3].toString() + '</p>');
                 else
                     $('#result-table').append('<p class="mb-0">' + append_ele[0][3].toString() + '</p>');

                 if (append_ele[0][9] == 3)
                     $('#result-table').append('<p class="mb-0" style="color:green">' + append_ele[0][4].toString() + '</p>');
                 else
                     $('#result-table').append('<p class="mb-0">' + append_ele[0][4].toString() + '</p>');

                 if (append_ele[0][9] == 4)
                     $('#result-table').append('<p class="mb-0" style="color:green">' + append_ele[0][5].toString() + '</p>');
                 else
                     $('#result-table').append('<p class="mb-0">' + append_ele[0][5].toString() + '</p>');
                 // $('#result-table').append('<br>');
                 /* $('#result-table').append('<p class="mb-0">' + append_ele[0][2].toString() + '</p>');
                 // $('#result-table').append('<br>');
                 $('#result-table').append('<p class="mb-0">' + append_ele[0][3].toString() + '</p>');
                 // $('#result-table').append('<br>');
                 $('#result-table').append('<p class="mb-0">' + append_ele[0][4].toString() + '</p>');
                 // $('#result-table').append('<br>');
                 $('#result-table').append('<p class="mb-0">' + append_ele[0][5].toString() + '</p>'); */
             } else {
                 if (append_ele[0][9] == 1)
                     $('#result-table').append('<p class="mb-0" style="color:green">' + append_ele[0][2].toString() + '</p>');
                 else if (append_ele[0][10] == 1)
                     $('#result-table').append('<p class="mb-0" style="color:red">' + append_ele[0][2].toString() + '</p>');
                 else
                     $('#result-table').append('<p class="mb-0">' + append_ele[0][2].toString() + '</p>');

                 if (append_ele[0][9] == 2)
                     $('#result-table').append('<p class="mb-0" style="color:green">' + append_ele[0][3].toString() + '</p>');
                 else if (append_ele[0][10] == 2)
                     $('#result-table').append('<p class="mb-0" style="color:red">' + append_ele[0][3].toString() + '</p>');
                 else
                     $('#result-table').append('<p class="mb-0">' + append_ele[0][3].toString() + '</p>');

                 if (append_ele[0][9] == 3)
                     $('#result-table').append('<p class="mb-0" style="color:green">' + append_ele[0][4].toString() + '</p>');
                 else if (append_ele[0][10] == 3)
                     $('#result-table').append('<p class="mb-0" style="color:red">' + append_ele[0][4].toString() + '</p>');
                 else
                     $('#result-table').append('<p class="mb-0">' + append_ele[0][4].toString() + '</p>');

                 if (append_ele[0][9] == 4)
                     $('#result-table').append('<p class="mb-0" style="color:green">' + append_ele[0][5].toString() + '</p>');
                 else if (append_ele[0][10] == 4)
                     $('#result-table').append('<p class="mb-0" style="color:red">' + append_ele[0][5].toString() + '</p>');
                 else
                     $('#result-table').append('<p class="mb-0">' + append_ele[0][5].toString() + '</p>');

                 /* $('#result-table').append('<p class="mb-0">' + append_ele[0][2].toString() + '</p>');
                 $('#result-table').append('<p class="mb-0">' + append_ele[0][3].toString() + '</p>');
                 $('#result-table').append('<p class="mb-0">' + append_ele[0][4].toString() + '</p>');
                 $('#result-table').append('<p class="mb-0">' + append_ele[0][5].toString() + '</p>'); */
             }
             /* $('#result-table').append('<p class="mb-0">' + append_ele[0][1].toString() + '</p>');
             // $('#result-table').append('<br>');
             $('#result-table').append('<p class="mb-0">' + append_ele[0][2].toString() + '</p>');
             // $('#result-table').append('<br>');
             $('#result-table').append('<p class="mb-0">' + append_ele[0][3].toString() + '</p>');
             // $('#result-table').append('<br>');
             $('#result-table').append('<p class="mb-0">' + append_ele[0][4].toString() + '</p>');
             // $('#result-table').append('<br>');
             $('#result-table').append('<p class="mb-0">' + append_ele[0][5].toString() + '</p>'); */
             $('#result-table').append('<br>');
             $('#result-table').append('<br>');
             if (append_ele[0][5][9] == 1) {

             } else if (append_ele[0][5][9] == 2) {

             } else if (append_ele[0][5][9] == 3) {

             } else {

             }
             append_ele = [];
         }
     }
 }