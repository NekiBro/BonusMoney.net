/*
##############################################
# разработчик скрипта: visitempire.ru        #
# имя скрипта: visitempire                   #
# версия скрипта: 4.00+                      #
# статус: бесплатный скрипт                  #
# требования: php 5.3.0+                     #
# дата создания скрипта: 09.09.2014 г.       #
# страница: http://www.visitempire.ru/       #
# e-mail: admin@visitempire.ru               #
##############################################
*/

function send(){
var data = $('#mydata').val()
$.ajax({
type: "POST",
url: "searchurl.php",
data: "data="+data,
success: function(html){
$("#result").empty();
$("#result").append(html);}})
;}
