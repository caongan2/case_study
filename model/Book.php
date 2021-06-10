<?php


namespace Model;


class Book
{
    public string $name;
    public string $category;
    public string $publisher;
    public string $status;
    public mixed $image;
    public int $id;

    public function __construct(string $name,
                                string $category,
                                string $publisher,
                                string $status,
                                mixed $image)
    {
        $this->name = $name;
        $this->category = $category;
        $this->publisher = $publisher;
        $this->status = $status;
        $this->image = $image;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }
}
