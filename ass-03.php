<?php
/**
     * ID:602110198
     * Name: Jingrong Zhuang
     * WeChat: Rz
     */

if ($_SERVER['argc']<=1||$_SERVER['argc']>3){
    printf("invalid arguments\nuse ass03 [input_file] output_file ");
}
else if ($_SERVER['argc']==2){
    $output=fopen($_SERVER['argv'][1],"w");
    do{
    $input=fgets(STDIN);
    if (feof(STDIN)){
    break;
    }
    else{
    /*
        You cannot use fprintf() here because
        it cannot handle new-line charactor and
        when use input some formatter, e.g. %s, %d.
        Try to use another function such as fputs().
    */
    fwrite($output,$input);
}}while(!feof(STDIN));
fclose($output);}
else{
    if(file_exists($_SERVER['argv'][1])){
    $outputfile=fopen($_SERVER['argv'][2],'wb');
    $inputfile=fopen($_SERVER['argv'][1],'rb');
    /*
        Beware when use filesize() with fread().
        If file size is very large you wil get an error.
    */
    $output="";
    while(!feof($inputfile)){
        $output .= fread($inputfile,1024);}
    fwrite($outputfile,$output);
    fclose($inputfile);
    fclose($outputfile);
    }
    else printf("Cannot open file %s!!! ",$argv[1]);
}