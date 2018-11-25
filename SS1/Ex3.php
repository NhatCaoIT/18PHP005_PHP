<?php
    $myclass = array(
        'nam' => array('name' => 'nam' , 'birthday' => 1997 , 'email' => 'nam@gmail.com'),
        'huong' => array ('name' => 'huong' , 'birthday' => 1996 , 'email' => 'huong@gmail.com'),
        'nga' => array ('name' =>'nga' , 'birthday' => 1997 , 'email' => 'nga@gmail.com'  )
    );
    function showclass($arr){
        echo "---------**--------- </br>";
        $i = 1;
        foreach($arr as $arrnew){
            echo $i. '.' ,$arrnew['name']. ' - ' .$arrnew['birthday']. ' - ' .$arrnew['email']. '</br>' ;
            $i++;
        }
        }
        showclass($myclass);


    function checkbirthdayandemail($arr , $name , $email){
        foreach($arr as $key => $arrnew){
            if($arrnew['name'] == $name ){
                $arr[$key]['email'] = $email;
            }
        }
        return $arr;
    }
    $myclass = checkbirthdayandemail($myclass , 'nga' , 'nga97@gmail.com');
    showclass($myclass);

    
    function removebyname($arr , $name){
        foreach($arr as $key => $arrnew){
            if($arrnew['name'] == $name){
                unset($arr[$key]);
            }
        }
        return $arr;
    }
    $myclass = removebyname($myclass , 'nga');
    showclass($myclass);



    function editemail($arr , $birthday , $email){
        foreach($arr as $key => $arrnew){
            if($arrnew['birthday'] == $birthday){
                $arr[$key]['email'] = $email;
            }
        }
        return $arr;
    } 
    $myclass = editemail($myclass , 1997 , 'test@gmail.com');
    showclass($myclass);

    function addMember($arr,$key , $name , $birthday , $email){
        $arr[$key]['name'] = $name;
        $arr[$key]['birthday'] = $birthday;
        $arr[$key]['email'] = $email;
        return $arr;
    }
    $myclass = addMember($myclass , 'Tung' , 'tung' , 1997 , 'tung@gmail.com');
    showclass($myclass);





?>