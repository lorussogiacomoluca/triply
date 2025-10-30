# 🎓 **Progetto Finale**

---

## 🧩 **Descrizione**

L’obiettivo di questo progetto è creare un **backoffice in Laravel** e un **frontend in React** per gestire e visualizzare un insieme di dati a vostra scelta.

---

## ⚙️ **Parte 1: Backoffice in Laravel**

Dovrete sviluppare un backoffice con **autenticazione gestita da Laravel Breeze**.  
Una volta loggato, l'utente potrà gestire un'entità a scelta, come:

-   🎮 **Videogiochi**
-   🎬 **Film**
-   💿 **Album musicali**
-   📚 **Libri o Fumetti**
-   …o qualsiasi altra entità vi venga in mente!

Per questa entità dovrete implementare **tutte le operazioni CRUD** (Creazione, Lettura, Aggiornamento, Eliminazione).

Oltre a questa, dovrà esserci **almeno una seconda entità collegata** alla prima con una relazione **1-N** o **N-N**.

---

### 🧠 **Esempi**

-   Se avete scelto i **videogiochi**, potreste avere la tabella delle **console** su cui è disponibile un gioco (PS5, Xbox, Switch).
-   Se avete scelto i **film**, potreste collegarli ai **generi cinematografici** (Azione, Commedia, Horror).
-   Potreste anche scegliere di avere **2 entità relazionate**, ad esempio, nel caso dei videogiochi, sia la **console** che il **genere** (Avventura, Picchiaduro, GDR).

---

Tutto il backoffice deve essere realizzato usando **Blade**, ma potete aiutarvi con **JavaScript** per eventuali logiche frontend.  
Siete anche liberi di usare **librerie JavaScript esterne** se vi torna comodo.

---

## 💻 **Parte 2: Sito guest in React**

Per i visitatori non autenticati (**guest**) dovrete creare un’app in **React** che permetta di:

✅ Visualizzare la **lista degli elementi** (videogiochi, film, ecc.)  
✅ Vedere i **dettagli** di un singolo elemento  
✅ Mostrare anche le **informazioni collegate** (es. le categorie di appartenenza)

Questa app dovrà comunicare con il backend tramite **chiamate AJAX ad API REST**, quindi nel backend dovrete creare un set di **endpoint API** per recuperare i dati.

---

## 🎯 **Obiettivo**

Alla fine di questo progetto avrete realizzato un’app completa con:

✅ Un **backoffice in Laravel** con autenticazione e gestione CRUD  
✅ Un **frontend in React** che mostra i dati in modo chiaro e interattivo  
✅ **Relazioni tra le entità** per una gestione più realistica delle informazioni

---

## 💡 **Consigli**

-   🧱 Strutturate bene le **relazioni nel database** prima di partire.
-   🧪 Usate **Postman** o strumenti simili per testare le API.
-   🎨 Curate l’**UI del frontend** per rendere la navigazione intuitiva.

---

### 🚀 **Buon lavoro!**
