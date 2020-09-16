<?php


/**
 * Class Animal
 * @Entity
 * @InheritanceType("SINGLE_TYPE")
 * @DiscriminatorColumn("
 */
class Animal
{

}

/**
 * Class Mammal
 * @Entity
 * @InheritanceType("SINGLE_TABLE")
 * @DiscriminatorColumn("
 */
class Mammal{

}

/**
 * Class Human
 * @Entity
 */
class Human{


}