<?php
namespace Component;

function collection(array $array = []): Component
{
   return new Component($array);
}
