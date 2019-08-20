<?php
require "bootstrap.php";

$user = (new entities\User())
    ->setFirstName('Tony')
    ->setLastName('Neumayer')
    ->setUsername('aneumayer')
    ->SetPassword('testtest1')
    ->SetDateCreated(new DateTime('now'));

$entity_manager->persist($user);

$entity_manager->flush();