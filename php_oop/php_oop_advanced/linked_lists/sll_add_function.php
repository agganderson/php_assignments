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
	}

	//creating an instance of class SinglyLinkedList
	$newlist1 = new SinglyLinkedList();
	//setting the head to a new node
	$newlist1->head = new Node(1);
	//from the head we add the next new node
	$newlist1->head->next = new Node(2);
	//continue adding new nodes
	$newlist1->head->next->next = new Node(3);
	$newlist1->head->next->next->next = new Node(4);
	$newlist1->head->next->next->next->next = new Node(5);


	//newlist to demonstrate adding function
	$newlist2 = new SinglyLinkedList();
	$newlist2->add(1);
	$newlist2->add(2);
	$newlist2->add(3);
	$newlist2->add(4);
	$newlist2->add(5);

	var_dump($newlist2);
?>