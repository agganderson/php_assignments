<?php

	class Node{
		public function __construct($value){
			$this->value = $value;
			$this->next = null;
		}
	}

	class SinglyLinkedList{
		public function __construct(){
			$this->head = null;
		}

		function add($val){
			//check to see if there is not a head because then, we can create the head node
			if($this->head == null){
				//point head to that new node
				$this->head = new Node($val);
			}
			else{
				//we have a head, so lets navigate through the linked list till we get to the end
				//add the new node at the end

				//this is a temp to help us navigate the linked list
				$current = $this->head;
				while($current->next){
					//moving the pointer forward to the next node
					$current = $current->next;
				}
				$current->next = new Node($val);
			}
		}

		function printValues(){
			//traverse through the list
			$current = $this->head;
			while($current){
				echo $current->value . "<br />";
				$current = $current->next;
			}
		}
	} 



	$newlist = new SinglyLinkedList();
	$newlist->add(1);
	$newlist->add(2);
	$newlist->add(3);
	$newlist->add(4);
	$newlist->add(5);

	//new function
	$newlist->printValues();
?>