<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>تذكرة الدعم الفني</title>
</head>
<body>
    <p>
    لتواصل مع فريق الدعم .تم فتح تذكرة الدعم الفني لك .سيتم ارسال اشعار لك عبر الايميل بحال تم الرد على تذكرتك :بيانات تذكرتك معروضه اسفل :{{ ucfirst($ticket->name) }}  شكرا لك 
    </p>

    <p> : {{ $ticket->subject }}:العنوان</p>
    <p>{{ $ticket->important }} :الاولوية </p>
    <p>{{ $ticket->status }} :الحالة</p>

    <p>
    {{ route('ticket.show', $ticket->ticket_id) }} :بامكانك عرض التذكرة بأي وقت عبر الاربط التالي 
    </p>

</body>
</html>
