<?php

declare(strict_types=1);

namespace Aluch\YmlGenerator\Model;

/**
 * @author Artem Luchnikov <artem@luchnikov.ru>
 */
class Collection
{
    private string $id;
    private string $url;
    private array $pictures = [];
    private string $name;
    private ?string $description;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): Collection
    {
        $this->id = $id;
        return $this;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): Collection
    {
        $this->url = $url;
        return $this;
    }

    public function getPictures(): array
    {
        return $this->pictures;
    }

    public function addPicture(string $url): Collection
    {
        if (\count($this->pictures) < 10) {
            $this->pictures[] = $url;
        }

        return $this;
    }

    public function setPictures(array $pictures): Collection
    {
        $this->pictures = $pictures;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Collection
    {
        $this->name = $name;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): Collection
    {
        $this->description = $description;
        return $this;
    }

    public function toArray(): array
    {
        return [
            'url' => $this->getUrl(),
            'picture' => $this->getPictures(),
            'name' => $this->getName(),
            'description' => $this->getDescription(),
        ];
    }
}
