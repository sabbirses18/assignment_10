<?php

    class Book
    {
        //  Add properties as Private
        private $title;
        private $availableCopies;

        public function __construct($title, $availableCopies)
        {
            //  Initialize properties
            $this->title = $title;
            $this->availableCopies = $availableCopies;
        }

        //  Add getTitle method
        public function getTitle()
        {
            return $this->title;
        }

        //  Add getAvailableCopies method
        public function getAvailableCopies()
        {
            return $this->availableCopies;
        }

        //  Add borrowBook method
        public function borrowBook()
        {
            if ($this->availableCopies > 0) {
                $this->availableCopies--;
            } else {
                echo "No copies available to borrow.\n";
            }
        }

        //  Add returnBook method
        public function returnBook()
        {
            $this->availableCopies++;
        }
    }

    class Member
    {
        //  Add properties as Private
        private $name;

        public function __construct($name)
        {
            //  Initialize properties
            $this->name = $name;
        }

        //  Add getName method
        public function getName()
        {
            return $this->name;
        }

        //  Add borrowBook method
        public function borrowBook(Book $book)
        {
            $book->borrowBook();
        }

        //  Add returnBook method
        public function returnBook(Book $book)
        {
            $book->returnBook();
        }
    }

    // Usage

    //  Create 2 books with the following properties
    $book1 = new Book("The Great Gatsby", 5);
    $book2 = new Book("To Kill a Mockingbird", 3);

    //  Create 2 members with the following properties
    $member1 = new Member("John Doe");
    $member2 = new Member("Jane Smith");

    //  Apply Borrow book method to each member
    $member1->borrowBook($book1); // John Doe borrows The Great Gatsby
    $member2->borrowBook($book2); // Jane Smith borrows To Kill a Mockingbird

    //  Print Available Copies with their names
    echo "Available Copies of '{$book1->getTitle()}': {$book1->getAvailableCopies()}\n";
    echo "Available Copies of '{$book2->getTitle()}': {$book2->getAvailableCopies()}\n";

    ?>
