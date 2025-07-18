# Blogator – Mini Blog w PHP

**Blogator** to prosty blog CMS bez bazy danych, oparty na PHP i JSON. Stworzony z myślą o lekkim portfolio i nauce backendu.

## ✨ Funkcje

- Dodawanie i usuwanie wpisów
- Dane zapisywane w plikach `.json`
- Zmiana motywu (light/dark)
- Reveal sekcji przy scrollowaniu
- Smooth scroll
- Responsywny design

## 📦 Stack

- PHP 8.1 (bez frameworków)
- HTML5, CSS3, JavaScript
- Render.com (hosting + Docker)

## 🚀 Demo

🔗 [Zobacz na Render](https://blogator.onrender.com)

## 📁 Struktura

blogator/
├── index.php
├── add.php
├── delete.php
├── style.css
├── script.js
├── Dockerfile
├── render.yaml
├── posts/
└── includes/
└── functions.php

## 📌 Uwaga

- Projekt NIE używa bazy danych
- Wpisy są przechowywane w `posts/*.json`
- Folder `posts/` musi mieć uprawnienia do zapisu
