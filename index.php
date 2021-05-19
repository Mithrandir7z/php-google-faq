<?php 
    $domande = [
        'Clausole' => 
            "La Commissione europea ha approvato l'utilizzo di clausole 
            contrattuali tipo come mezzo per assicurare un livello adeguato di protezione 
            dei dati trasferiti all'esterno dello Spazio economico europeo. 
            Incorporando le clausole contrattuali tipo in un contratto stipulato fra 
            le parti che trasferiscono i dati, i dati personali vengono considerati protetti
            se vengono trasferiti in paesi non facenti parte dello Spazio economico europeo 
            o del Regno Unito a cui non si applica una decisione in materia di adeguatezza
            Ci basiamo su queste clausole contrattuali tipo per i trasferimenti di dati.
            Google predispone queste clausole contrattuali tipo anche per tutti i clienti dei suoi servizi per aziende, tra cui Google Workspace, Google Cloud Platform, Google Ads e altri prodotti pubblicitari e di misurazione. I dettagli sull'utilizzo delle clausole contrattuali tipo da parte di Google sono disponibili all'indirizzo privacy.google.com/businesses."
        ,

        "Disposizioni dell'EU-U.S. Privacy Shield" => 
            "Come descritto nella nostra certificazione Privacy 
            Shield (scudo per la privacy), rispettiamo gli Accordi EU-U.S. Privacy
            Shield (scudo UE-USA per la privacy) e Swiss-U.S. Privacy Shield 
            (scudo Svizzera-USA per la privacy), come stabilito dal Dipartimento 
            del Commercio degli Stati Uniti in relazione alla raccolta, all'utilizzo
            e alla conservazione di informazioni personali applicabili 
            rispettivamente ai paesi membri dell'Unione europea (inclusi i 
            paesi membri dello spazio SEE), al Regno Unito e alla Svizzera. 
            Google, incluse Google LLC e le consociate degli Stati Uniti di 
            sua proprietà (a meno che vengano escluse esplicitamente), ha 
            certificato la sua adesione ai principi del Privacy Shield 
            (scudo per la privacy). Google è responsabile di qualsiasi 
            informazione personale fornita a terze parti per l'elaborazione
            esterna per suo conto ai sensi del Principio del Trasferimento 
            Successivo (Onward Transfer Principle), come descritto nella sezione
            relativa alla condivisione delle informazioni degli utenti. Per 
            ulteriori informazioni sul programma Privacy Shield (scudo per 
            la privacy) e per visualizzare la certificazione di Google, 
            invitiamo a visitare il sito web Privacy Shield.

            Per eventuali richieste di informazioni sulle nostre norme di 
            tutela della 
            privacy in relazione alla nostra certificazione Privacy Shield,
            è possibile contattarci qui. Google è soggetta ai poteri di 
            indagine e sanzione della Federal Trade Commission. È inoltre
            possibile presentare un reclamo all'autorità per la protezione
            dei dati personali nazionale, con la quale collaboreremo per 
            risolvere la questione. In determinate circostanze, il Privacy
            Shield consente di invocare un arbitrato vincolante per 
            risolvere controversie non risolte mediante altri mezzi, 
            come descritto nell'Allegato I ai principi del Privacy Shield.

            Dal 16 luglio 2020 non ci basiamo più sull'EU-U.S. Privacy 
            Shield (scudo UE-USA per la privacy) per trasferire dati dallo
            Spazio economico europeo e dal Regno Unito negli Stati Uniti."
        ,
        
        'Comunicazione informazioni' => 
            "Utilizziamo le informazioni che raccogliamo, come ad esempio l'indirizzo email, per interagire direttamente con te. Ad esempio, potremmo mandarti una notifica qualora rilevassimo attività sospette, ad esempio un tentativo di accedere al tuo account Google da una posizione insolita. Oppure potremmo informarti circa le modifiche o i miglioramenti imminenti riguardanti i nostri servizi. Se contatti Google, terremo una registrazione della tua richiesta per aiutarti a risolvere eventuali problemi che potrebbero sorgere."
        
    ];

    
?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google Faq</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <!--INIZIO HEADER-->
    <header>
        <div class="logo">
            <img src="img/logo.png" alt="logo">
            <span>Privacy & Termini</span>
        </div>

        <ul>
            <li>Introduzione</li>
            <li>Norme sulla privacy</li>
            <li>Termini di servizio</li>
            <li>Tecnologie</li>
            <li>Domande Frequenti</li>
        </ul>
    </header>
    <!--FINE HEADER-->


    <!--INIZIO MAIN-->
    <main>
        <div class="testo">
            
        <?php foreach($domande as $titolo => $testo) { ?> 

            <h3> <?php echo $titolo; ?> </h3>

            <p>
                <?php echo $testo ?>
            </p>

        <?php } ?>





    </main>
    <!--FINE MAIN-->

</body>
</html>