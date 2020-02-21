
 <?php/*
$recaptcha = $_POST['g-recaptcha-response'];
 
if(!empty($recaptcha)) {
    $recaptcha = $_REQUEST['g-recaptcha-response'];
    $secret = 'секретный ключ';
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=".$secret ."&response=".$recaptcha."&remoteip=".$_SERVER['REMOTE_ADDR'];
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_TIMEOUT, 10);
    curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:8.0) Gecko/20100101 Firefox/8.0");
    $curlData = curl_exec($curl);
    curl_close($curl); 
    $curlData = json_decode($curlData, true);
    if($curlData['success']) {

        $userName = $_POST['user_name'];
        $email = $_POST['email'];
        <!-- Первая функция преобразует все символы, которые 
        пользователь попытается добавить в форму: -->
        $userName = htmlspecialchars($fio);
        $email = htmlspecialchars($email);
        <!-- Вторая функция декодирует url,
        если пользователь попытается его добавить в форму. -->
        $userName = urldecode($userName);
        $email = urldecode($email);
        <!-- Третей функцией мы удалим 
        пробелы с начала и конца строки, если таковые имеются: -->
        $userName = trim($userName);
        $email = trim($email);
        <!-- Для того, чтобы проверить, работает ли этот код, передаются  
        ли данные можно просто их вывести на экран при помощи функции echo: -->
        echo $fuserName;
        echo "<br>";
        echo $email;
        if (mail("kup4enya1999@gmail.com", "Заявка с сайта", "ФИО:".$userName.". E-mail: ".$email ,"From: kupchenya1998@mail.ru \r\n")){
        echo "Сообщение успешно отправлено";
        } else {
        echo "При отправке сообщения возникли ошибки";
        }
    }
    else {
        echo "Подтвердите, что вы не робот и попробуйте еще раз";
    }
}
else {
    echo "поставьте галочку в поле 'Я не робот' для отправки сообщения";
}
?>


https://api.telegram.org/bot926623570:AAGkrjFJtm24cB7zyRgMSNb5e29k9ZSrSoE/getUpdates,
*/


$userName = $_POST['user_name'];
$email = $_POST['email'];
$token = "926623570:AAGkrjFJtm24cB7zyRgMSNb5e29k9ZSrSoE";
$chatID = "-384770883" ;

$arr = array(
    'Имя пользователя'=> $userName,
    'Почта пользователя' =>$email,
);
foreach($arr as $key => $value){
    $txt.="<b>".$ey."</b>".$value."%0A";

};
$sendToTelegram = fopen("https://api.telegram.org/bot($token)/sendMessage?chat_id={$chatID}&parsw_mode=html&text={$txt}","r");
if($sendToTelegram){
    header('Location:thanks.html');
}
else{
    echo"Error";
}
?>

