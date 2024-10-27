<?php

// => array_combine(key,value) Function

$name = array("aung aung","su su","kyaw kyaw","hla hla");
$age = [30,25,35,40];

$result = array_combine($name,$age);
echo "<pre>".print_r($result,true)."</pre>"; // (    [aung aung] => 30 [su su] => 25 [kyaw kyaw] => 35 [hla hla] => 40)
echo $result["kyaw kyaw"]; /// 35


// => count(array) Function
$vehicles = ["toyota","ford","audi","mazda","suzuki","ford","mazda","bmw"];
echo count($vehicles); // 8



// => array_count_values(array) Function
$cars = ["toyota","ford","audi","mazda"];
echo "<pre>".print_r(array_count_values($cars),true)."</pre>"; // ([toyota] => 1 [ford] => 1 [audi] => 1 [mazda] => 1)
$brands = ["toyota","ford","audi","mazda","suzuki","ford","mazda","bmw","Toyota"];
echo "<pre>".print_r(array_count_values($brands),true)."</pre>"; // ([toyota] => 1 [ford] => 2 [audi] => 1 [mazda] => 2 [suzuki] => 1 [bmw] => 1 [Toyota] => 1)


// => array_chunk(array,length) Function
// => array_chunk(array,length,preservekey)
// preservekey = true/false 

$couples = ["aung aung",'su su',"kyaw kyaw",'nu nu',"tun tun",'yin yin',"zaw zaw",'aye aye'];

$result1 = array_chunk($couples,2);
echo "<pre>".print_r($result1,true)."</pre>"; // (    [0] => Array ( [0] => aung aung [1] => su su) [1] =>Array([0] => kyaw kyaw [1] => nu nu)[2] => Array([0] => tun tun[1] => yin yin)[3] => Array([0] => zaw zaw[1] => aye aye))
echo $result1[0][1]; // su su

$result2 = array_chunk($couples,2,true);
echo "<pre>".print_r($result2,true)."</pre>";  // 0 1 2 3 4 5

$result3 = array_chunk($couples,2,false);
echo "<pre>".print_r($result3,true)."</pre>"; // 01 01 01 01




// => array_diff(array1,array2,...) Function
// Note :: we don't need to consider any index or keyname

$colors1 = ["red","green",'blue','pink'];
$colors2 = ["red","blue","pink","silver"];
$colors3 = ["green","blue","orange","violet"];

echo "<pre>".print_r(array_diff($colors1,$colors2),true)."</pre>"; // ( [1] => green )
echo "<pre>".print_r(array_diff($colors2,$colors1),true)."</pre>"; // ( [3] => silver )
echo "<pre>".print_r(array_diff($colors1,$colors2,$colors3),true)."</pre>"; // ()

$col1 = ["a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow"];
$col2 = ["e"=>"red","f"=>"green","g"=>"black"];
echo "<pre>".print_r(array_diff($col1,$col2),true)."</pre>"; // ( [c] => blue [d] => yellow )
echo "<pre>".print_r(array_diff($col2,$col1),true)."</pre>"; // ( [g] => black )



// => array_diff_assoc(array1,array2,...) Function
// Note :: we need to consider keyname and value (just for assoc array)

$col1 = ["a"=>"red","b"=>"yellow","c"=>"blue","d"=>"green"];
$col2 = ["a"=>"red","b"=>"green","c"=>"blue"];
echo "<pre>".print_r(array_diff_assoc($col1,$col2),true)."</pre>";  // ( [b] => yellow [d] => green)
echo "<pre>".print_r(array_diff_assoc($col2,$col1),true)."</pre>"; // ( [b] => green)


// => array_diff_key(array1,array2,...) Function
// Note :: we need to consider any keyname (just for assoc array)

$col1 = ["a"=>"red","b"=>"yellow","c"=>"blues","d"=>"green","f"=>"pink"];
$col2 = ["a"=>"red","b"=>"green","c"=>"blue","e"=>"orange"];
echo "<pre>".print_r(array_diff_key($col1,$col2),true)."</pre>";  // ( [d] => green [f] => pink)
echo "<pre>".print_r(array_diff_key($col2,$col1),true)."</pre>"; // ( [e] => orange )



// => array_intersect(array1,array2,...) Function
// Note :: we don't need to consider keyname

$num1 = [10,20,30,60,70,80];
$num2 = array(10,20,30,40,50,90,80);
echo "<pre>".print_r(array_intersect($num1,$num2),true)."</pre>"; // ( [0] => 10 [1] => 20 [2] => 30 [5] => 80 )
echo "<pre>".print_r(array_intersect($num2,$num1),true)."</pre>"; // ( [0] => 10 [1] => 20 [2] => 30 [5] => 80 )

$col1 = ["a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow"]; 
$col2 = ["a"=>"red","f"=>"green","d"=>"orange"];
echo "<pre>".print_r(array_intersect($col1,$col2),true)."</pre>";  // ( [a] => red [b] => green)
echo "<pre>".print_r(array_intersect($col2,$col1),true)."</pre>";  // ( [a] => red [f] => green)



// => array_fill(startindex,count,value) Function
echo "<pre>".print_r(array_fill(0,5,"green"),true)."</pre>"; // ( [0] => green [1] => green [2] => green [3] => green [4] => green)
echo "<pre>".print_r(array_fill(2,5,"blue"),true)."</pre>"; // [2] => blue [3] => blue [4] => blue [5] => blue [6] => blue




// => array_fill_keys(keys,value) Function
$keys = ["a","b","c","d"];
$values = ["red","green","blue","pink"];
echo "<pre>".print_r(array_fill_keys($keys,"pink"),true)."</pre>"; // ( [a] => pink [b] => pink [c] => pink [d] => pink )
echo "<pre>".print_r(array_fill_keys($keys,$values),true)."</pre>"; // ([a] => Array([0] => red [1] => green  [2] => blue [3] => pink) [b] => Array([0] => red   [1] => green [2] => blue [3] => pink)[c] => Array([0] => red [1] => green [2] => blue[3] => pink)[d] => Array([0] => red [1] => green [2] => blue [3] => pink))




// => array_keys_exists(key,array) Function (just for assoc array)
$operators = ["mpt"=>"ftth","ooredoo"=>"broadband"];

if(array_key_exists('mpt',$operators)){
    echo "Key exists";
}else{
    echo "Key does not exist";
}



// => array_merge(array1,array2,...) Function
$arr1 = ["red","green"];
$arr2 = array("blue","yellow");
$arr3 = ["orange","violet"];

echo "<pre>".print_r(array_merge($arr1,$arr2),true)."</pre>"; // ( [0] => red [1] => green [2] => blue [3] => yellow )
echo "<pre>".print_r(array_merge($arr1,$arr2,$arr3),true)."</pre>"; // ( [0] => red [1] => green [2] => blue [3] => yellow [4] => orange [5] => violet )


// => array_keys(array) Function
// => array_keys(array,value) Function
// => array_keys(array,value,strict)

$phones = ["mpt"=>"ftth",'ooredoo'=>"broadband","telenor"=>"wifi"];

echo "<pre>".print_r(array_keys($phones),true)."</pre>";  // ([0] => mpt [1] => ooredoo [2] => telenor)
echo array_keys($phones)[1]; // ooredoo


echo "<pre>".print_r(array_keys($phones,"broadband"),true)."</pre>";  // ([0] => ooredoo)
echo array_keys($phones,"broadband")[0]; // ooredoo


$numbers = [10,20,30,"10"];
echo "<pre>".print_r(array_keys($numbers,"10"),true)."</pre>";
echo "<pre>".print_r(array_keys($numbers,10),true)."</pre>";

echo "<pre>".print_r(array_keys($numbers,10,false),true)."</pre>";
echo "<pre>".print_r(array_keys($numbers,"10",false),true)."</pre>";

echo "<pre>".print_r(array_keys($numbers,10,true),true)."</pre>";
echo "<pre>".print_r(array_keys($numbers,"10",true),true)."</pre>";


// => array_map(callback,array1,array2,array3)

$males = ["tun tun",'aung aung',"kyaw kyaw","thura",'zaw zaw'];
$females = array('hla hla',"su su",'nu nu',"yu yu","thida");

function genderone($name){
    return ("Mr.".$name);
}

function gendertwo($male,$female){
    return ($male." & ".$female);
}

echo "<pre>".print_r(array_map("genderone",$males),true)."</pre>"; // ([0] => Mr.tun tun [1] => Mr.aung aung [2] => Mr.kyaw kyaw [3] => Mr.thura [4] => Mr.zaw zaw)
echo "<pre>".print_r(array_map("gendertwo",$males,$females),true)."</pre>"; // ([0] => tun tun & hla hla [1] => aung aung & su su [2] => kyaw kyaw & nu nu [3] => thura & yu yu [4] => zaw zaw & thida)



// => sort(array) Function

$cars = ['volov','bmw','toyota',"mazda","suzuki"];
sort($cars);
echo "<pre>".print_r($cars,true)."</pre>"; // ( [0] => bmw [1] => mazda [2] => suzuki [3] => toyota [4] => volov )


$numbers = [10,50,"80",90,35,"100",130,"250",70];
sort($numbers);
echo "<pre>".print_r($numbers,true)."</pre>"; // ( [0] => 10 [1] => 35 [2] => 50 [3] => 70 [4] => 80 [5] => 90 [6] => 100 [7] => 130 [8] => 250 )




// => array_multisort(array) Function

$carbrands = ['volov','bmw','toyota',"mazda","suzuki"];
array_multisort($carbrands);
echo "<pre>".print_r($carbrands,true)."</pre>"; // ( [0] => bmw [1] => mazda [2] => suzuki [3] => toyota [4] => volov )

$luckynumbers = [10,50,"80",90,35,"100",130,"250",70];
array_multisort($luckynumbers);
echo "<pre>".print_r($luckynumbers,true)."</pre>"; // ( [0] => 10 [1] => 35 [2] => 50 [3] => 70 [4] => 80 [5] => 90 [6] => 100 [7] => 130 [8] => 250 )


// => array_reverse(array) Function

$vehicles = ['volov','bmw','toyota',"mazda","suzuki"];
sort($vehicles);
echo "<pre>".print_r(array_reverse($vehicles),true)."</pre>"; // ( [0] => volov [1] => toyota [2] => suzuki [3] => mazda [4] => bmw )

$winnumbers = [10,50,"80",90,35,"100",130,"250",70];
array_multisort($winnumbers);
echo "<pre>".print_r(array_reverse($winnumbers),true)."</pre>"; // ( [0] => 250 [1] => 130 [2] => 100 [3] => 90 [4] => 80 [5] => 70 [6] => 50 [7] => 35 [8] => 10 )


// => array_pad(array,length,value) Function

$colors = ["red",'green'];
echo "<pre>".print_r(array_pad($colors,5,"blue"),true)."</pre>"; // ( [0] => red [1] => green [2] => blue [3] => blue [4] => blue )


// => array_reduce(array,callback,initial) Function


$nums = [10,'20',30];

function calfun($total,$val){
    return $total += $val;
}

echo array_reduce($nums,'calfun',0); // 60



// => array_search(value,array) Function
$myarrs = ["a",'b',"c","d","e"];
echo array_search("d",$myarrs); // 3

$myarrs = ["a"=>"red",'b'=>"green","c"=>"violet","d"=>"black","e"=>"blue"];
echo array_search("green",$myarrs); // b

// => array_pop(array) Function

$colors = ["red",'green',"blue"];
array_pop($colors);
echo "<pre>".print_r($colors,true)."</pre>"; // (  [0] => red [1] => green )

// => array_unshift(array,value1,value2,value2,...) Function
$colors = ["red",'green',"blue"];
array_unshift($colors,"silver",'violet');
echo "<pre>".print_r($colors,true)."</pre>"; // ([0] => silver [1] => violet [2] => red [3] => green [4] => blue )

$colors = ["0"=>"red","1"=>'green',"2"=>"blue"];
array_unshift($colors,"silver",'violet');
echo "<pre>".print_r($colors,true)."</pre>"; // ( [0] => silver [1] => violet [2] => red [3] => green [4] => blue )

$colors = ["a"=>"red","b"=>'green',"c"=>"blue"];
array_unshift($colors,"silver",'violet');
echo "<pre>".print_r($colors,true)."</pre>"; // ( [0] => silver [1] => violet [a] => red [b] => green [c] => blue )



// => array_push(array,value1,value2,value2,...) Function
$colors = ["red",'green',"blue"];
array_push($colors,"silver",'violet');
echo "<pre>".print_r($colors,true)."</pre>"; // ( [0] => red [1] => green [2] => blue [3] => silver [4] => violet blue )


$colors = ["0"=>"red","1"=>'green',"2"=>"blue"];
array_push($colors,"silver",'violet');
echo "<pre>".print_r($colors,true)."</pre>"; // ( [0] => red [1] => green [2] => blue [3] => silver [4] => violet )


$colors = ["a"=>"red","b"=>'green',"c"=>"blue"];
array_push($colors,"silver",'violet');
echo "<pre>".print_r($colors,true)."</pre>"; // ( [a] => red [b] => green [c] => blue [0] => silver [1] => violet )

?>

<!-- array_combine(key, value) >> array နှစ်ခုကို array တစ်ခုအဖြစ်သို့ ပေါင်းစည်းခြင်း။ Associative Array ပုံစံဖြစ်သွားတယ်။

count(array)        >> array တစ်ခုထဲမှာ value ဘယ်နှခုရှိလဲဆိုတာ စစ်ပေးတယ်။

array_count_values(array)   >> array ထဲ value ဘယ်လောက်ရှိလဲဆိုတာကို index နဲ့တကွ associative array ဖြင့် ဖော်ပြတယ်။

array_chunk(array,length,preservekey)   >> array တစ်ခုကို ဘယ်နှခုပိုင်းဖြတ်မလဲ။
preservekey is optional.
preservekey = true/false >> true ဆိုရင် 0 1 2 3 4 5 ... နဲ့ ဖော်ပြတယ်။ false ဆိုရင် 0 1 2...  0 1 2...   0 1 2... ဖြင့် ဖော်ပြတယ်။

array_diff(array1,array2,...)   >> array1 နဲ့ တခြား array တွေရဲ့ ခြားနားချက်ကို ဖော်ပြခြင်း။
Note :: we don't need to consider any index or keyname

array_diff_assoc(array1,array2,...) >> array1 နဲ့ တခြား array တွေရဲ့ ခြားနားချက်ကို ဖော်ပြခြင်း။
Note :: we need to consider keyname and value (just for assoc array)

array_diff_key(array1,array2,...) >> array1 နဲ့ array2 ရဲ့ keyname တွေရဲ့ ခြားနားချက်ကို ဖော်ပြခြင်း။
Note :: we need to consider any keyname (just for assoc array)

array_intersect(array1,array2,...) >> array1 နဲ့ array2 နှစ်ခုလုံးရဲ့ တူညီတာကို ဖော်ပြခြင်း။
Note :: we don't need to consider keyname

array_fill(startindex,count,value) >> array တစ်ခုထဲလို value တွေ ဖြည့်တင်းပေးခြင်း။
startindex >> စစေချင်သောနေရာ
count      >> ဖြစ်စေချင်သော အရေအတွက်။
value      >> ထည့်စေချင်သော အရာ။

array_fill_keys(keys,value)     >>  ရှိနေတဲ့ array ရဲ့ keys တွေရဲ့ value မှာ အစားထိုးခြင်း။

array_keys_exists(key,array) Function (just for assoc array)    >> array ထဲမှာ keyရှိမရှိကို if statement နဲ့ တွဲစစ်ပေးတယ်။

array_merge(array1,array2,...) >> array တွေကို တစ်ခုတည်းအဖြစ် ပေါင်းစည်းပေးခြင်း။

array_keys(array)       >> array ရဲ့ key တွေချည်း ဖော်ပြပေးတယ်။
In Associative Array,
array_keys(array,value) >> array ရဲ့ value တစ်ခုကို ထပ်ထည့်လိုက်ရင်တော့ keyname ကိုပဲ ဖော်ပြပေးတော့တယ်။
array_keys(array,value,strict) >> data type ကို sensitive ဖြစ်အောင် ပြုလုပ်ခြင်း။ ပိတ်ခြင်း။ (Default - false)
strict >> true, false(default)

In indexed array,
array_keys(array,value) >> array ရဲ့ key တွေရဲ့ idx num ချည်း ဖော်ပြပေးတယ်။


array_map(callback,array1,array2,array3)    >> array ကို map loop ပတ်သလိုမျိုးဖြစ်တယ်။ callback ဆိုတာ function တစ်ခုကို ပြန်ခေါ်ရတာဖြစ်ပြီး single quote('') or double quote("") ထည့်ပြီးမှ ပြန်ခေါ်ရတာဖြစ်တယ်။

sort(array)             >> array တစ်ခုကို sorting စီခြင်း။
array_multisort(array)  >> array တစ်ခုကို sorting စီခြင်း။
array_reverse(array)    >> reverse the array

array_pad(array,length,value) >> array တစ်ခုမှာ length တစ်ခုအထိ value ကို သွားထည့်ခြင်း။

array_reduce(array,callback,initial)    >> end the values in an array to a user-defined function and return a string:

array_search(value,array) >> value တစ်ခုကို array ထဲမှာ ရှာဖွေခြင်း။ For idx array, show with idx number. For assoc array, show with key name.

array_pop(array) >> array တစ်ခုရဲ့ နောက်ဆုံး value တစ်ခုကို ဖျက်ဖြစ်ခြင်း။

array_unshift(array,value1,value2,value2,...) >> array တစ်ခုရဲ့ ရှေ့ဆုံးမှာ value တွေ သွားထည့်ခြင်း။

array_push(array,value1,value2,value2,...) >> array တစ်ခုရဲ့ နောက်ဆုံးမှာ value တွေ သွားထည့်ခြင်း။ assoc array ဆိုရင် 0 1 စတာနဲ့ ထပ်ထည့်ပေးတယ်။

-->