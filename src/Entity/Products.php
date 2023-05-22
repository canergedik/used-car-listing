<?php

namespace App\Entity;

use App\Repository\TwitterRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity()]
class Products
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column()]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $username = null;

    #[ORM\Column(length: 200, nullable: true)]
    private ?string $bio = null;
    #[ORM\Column]
    private ?int $created_date = null;

    #[ORM\Column(length: 150)]
    private ?string $screen_name = null;
    #[ORM\Column(length: 250)]


    private ?string $description = null;
    #[ORM\Column(length: 1000,nullable: true)]
    private ?string $profile_image_url = null;


    
    #[ORM\Column(length: 200,nullable: true)]
    private ?string $make = null;
    


    #[ORM\Column(length: 200,nullable: true)]
    private ?string $model = null;

    #[ORM\Column(length: 200,nullable: true)]
    private ?string $year = null;

    #[ORM\Column(length: 200,nullable: true)]

    private ?string $fuelType = null;
    
    #[ORM\Column(length: 250)]
    private ?string $location = null;

    #[ORM\Column(length: 100)]
    private ?string $id_str = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(?string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->bio;
    }

    public function setContent(?string $bio): self
    {
        $this->bio = $bio;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCreatedDate(): ?int
    {
        return $this->created_date;
    }

    public function setCreatedDate(int $created_date): self
    {
        $this->created_date = $created_date;

        return $this;
    }

    public function getScreenName(): ?string
    {
        return $this->screen_name;
    }

    public function setScreenName(string $screen_name): self
    {
        $this->screen_name = $screen_name;

        return $this;
    }

    public function getTweetId(): ?string
    {
        return $this->id_str;
    }

    public function setTweetId(string $id_str): self
    {
        $this->id_str = $id_str;
        return $this;
    }


    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): self
    {
        $this->location = $location;
        return $this;
    }

    public function getImage(): ?string
    {
        return $this->profile_image_url;
    }

    public function setImage(string $profile_image_url): self
    {
        $this->profile_image_url = $profile_image_url;
        return $this;
    }


    public function getMake(): ?string
    {
        return $this->make;
    }

    public function setMake(string $make):self
    {
         $this->make =$make;
         return $this;
    }


    public function getModel(): ?string
    {
        return $this->model;
    }


    public function setModel(string $model): self
    {
        $this->model = $model;
        return $this;
    }

    public function getBio(): ?string
    {
        return $this->bio;
    }

    public function setBio(?string $bio): self
    {
        $this->bio = $bio;

        return $this;
    }

    public function getProfileImageUrl(): ?string
    {
        return $this->profile_image_url;
    }

    public function setProfileImageUrl(?string $profile_image_url): self
    {
        $this->profile_image_url = $profile_image_url;

        return $this;
    }

    public function getYear(): ?string
    {
        return $this->year;
    }

    public function setYear(?string $year): self
    {
        $this->year = $year;

        return $this;
    }

    public function getFuelType(): ?string
    {
        return $this->fuelType;
    }

    public function setFuelType(?string $fuelType): self
    {
        $this->fuelType = $fuelType;

        return $this;
    }

    public function getIdStr(): ?string
    {
        return $this->id_str;
    }

    public function setIdStr(string $id_str): self
    {
        $this->id_str = $id_str;

        return $this;
    }



}
