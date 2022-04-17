<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Ingredients</title>
    <link rel="stylesheet" href="{{asset('css/output.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body class="font-Poppins bg-[#A0937D]">
    <div class="flex justify-center">
        <div class="w-[600px] h-[500px] bg-white mt-32">
            <div class="flex justify-end mr-5 text-6xl cursor-pointer font-PJSLight"><a href="ingredients.html">&times;</a></div>
            <form action="{{route('updateIngredient')}}" method="POST" class="mt-5" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="flex text-base justify-between px-14">
                    <p class="mt-1">Name :</p>
                    <input type="text" name="name" class="bg-[#E3CDC1] w-96 h-8">
                </div>

                <div class="flex text-base justify-between px-14 mt-5">
                    <p class="mt-1">Stock :</p>
                    <input type="number" name="stock" class="bg-[#E3CDC1] w-96 h-8">
                </div>

                <div class="flex text-base justify-between px-14 mt-5">
                    <p class="mt-1">Buy Date :</p>
                    <input type="date" name="buy_date" class="bg-[#E3CDC1] w-96 h-8">
                </div>

                <div class="flex text-base justify-between px-14 mt-5">
                    <p class="mt-1">Exp Date :</p>
                    <input type="date" name="expired_date" class="bg-[#E3CDC1] w-96 h-8">
                </div>

                <div class="flex text-base justify-between px-14 mt-5">
                    <p class="mt-1">Location :</p>
                    <input type="text" name="gudang_id" class="bg-[#E3CDC1] w-96 h-8">
                </div>

                <div class="flex justify-between px-32">
                <a href="{{route('getIngredientPage')}}">
                    <button type="submit" class="mt-20 px-8 py-3 bg-[#E7D4B5] rounded-xl">Cancel</button>
                </a>
                    <button type="submit" class="mt-20 px-8 py-3 bg-[#A0937D] rounded-xl">Save Changes</button>
                </div>
            </form>
        </div>
    </div>

    <!--npx tailwindcss -i ./css/input.css -o ./css/output.css --watch-->
</body>
</html>
