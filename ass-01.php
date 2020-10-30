<?php
/**
     * ID:602110198
     * Name: Jingrong Zhuang
     * WeChat: Rz
     */
$file=fopen($_SERVER["argv"][1],"r");
fscanf($file,"%d",$danum);
printf("number of data %d\n",$danum);
for ($i=0;$i<$danum;$i++){
    fscanf($file,"%s %f",$name[],$score[]);
    printf("%-11s:%11.6f\n",$name[$i],$score[$i]);
}
$average=array_sum($score)/$danum;
printf("Average score =%11.6f\n",$average);

fclose($file);