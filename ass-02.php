<?php
/**
     * ID:602110198
     * Name: Jingrong Zhuang
     * WeChat: Rz
     */
/*
    All value from command-line arguments are string.
    So if we want to specify data type, we have to cast them
    by using (...) operator.
*/
//$opened=$argv[1];
$opened=(int)$argv[1];
$output=STDOUT;
if ($_SERVER["argc"]>=3){
    $output=fopen($_SERVER["argv"][2],"w");
}

    $n=$opened;
    fprintf($output,"     |");
    for($i=2;$i<=$n;$i++){
        fprintf($output,"%8d",$i);
    }
    fprintf($output,"\n");
    fprintf($output," ----+");
    $format=str_repeat("-",8*($n-1));
    fprintf($output,"%s\n",$format);
    for($row=1;$row<=12;$row++){
        for($col=1;$col<=$n;$col++){
            if($col==1){
                fprintf($output,"%5d|",$col*$row);
            }
            else{
                fprintf($output,"%8d",$col*$row);
            }
        }
        fprintf($output,"\n");
    }

    fclose($output);
