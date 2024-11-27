<h2>Reservations à venir</h2>

<table>
    <thead>
        <tr>
            <th>Num res</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Tél</th>
            <th>Paiement</th>
            <th>Prix séjour</th>
            <th>Date entrée</th>
            <th>Date sortie</th>
        </tr>
    </thead>
    <tbody>
    {foreach from=$reservations item=reservation}
    <tr>
        <td>{{ reservation.num_res }}</td>
        <td>{{ reservation.nom }}</td>
        <td>{{ reservation.prenom }}</td>
        <td>{{ reservation.tel }}</td>
        <td>{{ reservation.paiement }}</td>
        <td>{{ reservation.prix_sejour }}</td>
        <td>{{ reservation.date_entree|date('Y-m-d') }}</td>
        <td>{{ reservation.date_sortie|date('Y-m-d') }}</td>
    </tr>
    {foreachelse}
    <tr>
        <td colspan="8">Aucune réservation trouvée</td>
    </tr>
    {/foreach}
    </tbody>
</table>