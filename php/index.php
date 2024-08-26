<?php

function _generateRow($size, $fill=true) {
	$result = "o";
	$index = 1;
	while($index < $size) {
        if($index + 1 == $size || $fill == true)
            $result .= "o";
        else $result .= " ";
		$index++;
	}
	return $result;
}

function drawCube($size = 0) {
	for($i = 0; $i < $size; $i++) {
		echo ($i == 0 || $i+1 == $size)
			? _generateRow($size)
			: _generateRow($size, false);
		echo "\n";
	}
}

drawCube(4);
echo "\n----------------------------------\n";
drawCube(9);