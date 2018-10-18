<?php
    $mylist = array(
        'IphoneX' => array('name' => 'iphonex' ,'img' => 'SS14/iphonex.png' , 'price' => 1000 , 'sale' => 20 ),
        'j7' => array ('name' => 'J7' , 'img' => 'j7.png' , 'price' => 600 , 'sale' => 15),
        'Oppo' => array ('name' => 'oppo' , 'img' => 'oppo.png' , 'price' => 700 , 'sale' => 0),
    );

    function showlist($arr){
        $i = 1;;
        echo '----------------------------------------------- </br>';
        foreach($arr as $arrnew){
            echo $i. '.' , $arrnew['name']. ' - ' .$arrnew['price']. ' - ' .$arrnew['sale']. '</br>' ;
            $i++;
        }
    }
    showlist($mylist);

    function saleByPrice($arr , $price , $sale){
        foreach($arr as $key => $arrnew){
            if($arrnew['price'] >= $price){
                $arr[$key]['sale'] = $sale; 
            }
        }
        return $arr;
    }

    $mylist = saleByPrice($mylist ,700 , 30);
    showlist($mylist);

    function removeMoblie($arr , $name){
        foreach($arr as $t => $k){
            if($k['name'] == $name){
                unset($arr[$t]);
            }
        }
        return $arr;
    }
    $mylist = removeMoblie($mylist , 'oppo');
    showlist($mylist);


    function addSp($arr , $key, $name , $price , $sale){
            $arr[$key]['name'] = $name;
            $arr[$key]['price'] = $price;
            $arr[$key]['sale'] = $sale;
            return $arr;
    }

    $mylist = addSp($mylist , 'addnew' , 'Sony' , 500 , 10 );
    showlist($mylist);

   function showSpByPrice($arr , $price){
            foreach($arr as $key => $value){
                if($value['price'] < $price){
                    unset($arr[$key]);
                }
            }
            return $arr;
   }
   $mylist = showSpByPrice($mylist , 600);
   showlist($mylist);

   function showSpAndSale($arr){
    
       foreach($arr as $key => $value){
            $arr[$key]['price'] -= $arr[$key]['price']* $arr[$key]['sale']/100;
       }

       return $arr;
   }
  $mylist = showSpAndSale($mylist);
   showlist($mylist);

   function removeByPriceAndSale($arr ,$price , $sale){
       foreach($arr as $key => $value){
           if($value['price'] <$price && $value['sale'] > $sale){
                unset($arr[$key]);
           }
       }
       return $arr;
   }
   $mylist = removeByPriceAndSale($mylist , 700 , 12);
   showlist($mylist);

?>