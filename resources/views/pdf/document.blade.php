<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document PDF</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<style>
    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
    }

    .container {
        padding: 20px;
    }

    h1 {
        color: #333;
    }

    p {
        color: #666;
    }
</style>

<body class="bg-gray-100">
    <div class="container">
        <h1 class="text-center bg-gray-500 text-white py-2 font-bold text-2xl">Hospital Management System </h1>
    </div>
    <div class="container mx-auto mt-8">
        <h1 class="text-xl font-bold mb-4"> Appointments list PDF</h1>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white">
                <thead>

                    <tr>
                        <th class="py-2 px-4 border-b">Patient Name</th>
                        <th class="py-2 px-4 border-b">Doctor Name</th>
                        <th class="py-2 px-4 border-b">Appointment Date</th>
                        <th class="py-2 px-4 border-b">Confirm or not</th>
                    </tr>

                </thead>
                <tbody>
                    @forelse ($appointments as $appointments)
                        <tr class="bg-gray-100">
                            <td class="py-2 px-4 border-b"> {{ $appointments->name }}</td>
                            <td class="py-2 px-4 border-b">{{ @$appointments->doctor->name }}</td>
                            <td class="py-2 px-4 border-b">{{ @$appointments->date_time }}</td>
                            <td class="py-2 px-4 border-b">{{ @$appointments->is_conform ? ' confirm ' : 'Pending' }}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-3xl text-blue-600 text-center py-2">No Record
                                Found.
                            </td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>

</body>

</html>
