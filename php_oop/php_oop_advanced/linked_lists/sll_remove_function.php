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

		//new function to add nodes
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

		//new function to remove nodes
		function remove($val){
			//check if the node we want to remove is the head
			if($this->head->value == $val){
				//its the head! so change the head pointer
				$this->head = $this->head->next;
			}
			else{
				//find the node and make sure we don't hit the end of the node list
				$current = $this->head;
				while($current->next->value != $val && current->next){
					//move the pointer forward
					$current = $current->next;
				}
				//change the pointer
				//create a tempt to hold onto what is ahead of the node we found
				$temp = $current->next->next;
				//now set current node's next to the node thats on the other side of the node we want to remove
				$current->next = $temp;
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

	//removing the last node we just have to remove the reference to that node
	$newlist->head->next->next->next->next = null;

	//remove a node in the middle of a list 
	//hold onto the last node so we don't los it when we reset a pointer
	$temp = $newlist->head->next->next->next;

	//NOW we reset the pointer to the temp
	$newlist->head->next->next = $temp;


	//using the remove function should remove these specific nodes and their values
	$newlist->remove(1);
	$newlist->remove(3);
	$newlist->remove(5);
?>