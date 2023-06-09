<section class="register-section relative min-h-screen min-w-full flex justify-center items-center bg-background py-6">
    <div class="card-container py-5 px-7  bg-white rounded-xl w-400 text-center text-gray-500">
        <h1 class="text-4xl text-gray-700 font-bold mb-2">Register Today</h1>
        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>

        <form action="" wire:submit.prevent = "register">
            <div class="grid grid-cols-1 gap-x-5 sm:grid-cols-6">
                <div class="input-container sm:col-span-3 mb-2 text-left">
                    <label class="" for="name">Name</label>
                    <input class="w-full px-4 py-3 rounded-md ring-1 ring-inset ring-gray-300" id="name" name="name" type="text" placeholder="Name">
                </div>
                <div class="input-container sm:col-span-3 mb-2 text-left">
                    <label class="" for="surname">Surname</label>
                    <input class="w-full px-4 py-3 rounded-md ring-1 ring-inset ring-gray-300" id="surname" name="surname" type="text" placeholder="Surname">
                </div>
                <div class="input-container sm:col-span-3 mb-2 text-left">
                    <label class="" for="email">Email</label>
                    <input class="w-full px-4 py-3 rounded-md ring-1 ring-inset ring-gray-300" id="email" name="email" type="email" placeholder="Email">
                </div>
                <div class="input-container sm:col-span-3 mb-2 text-left">
                    <label class="" for="phone">Phone</label>
                    <input class="w-full px-4 py-3 rounded-md ring-1 ring-inset ring-gray-300" id="phone" name="phone" type="text" placeholder="Phone">
                </div>
                <div class="input-container sm:col-span-3 mb-2 text-left">
                    <label class="" for="password">Password</label>
                    <input class="w-full px-4 py-3 rounded-md ring-1 ring-inset ring-gray-300" id="password" name="password" type="password" placeholder="Password">
                </div>
                <div class="input-container sm:col-span-3 mb-2 text-left">
                    <label class="" for="conformPassword">Confirm Password</label>
                    <input class="w-full px-4 py-3 rounded-md ring-1 ring-inset ring-gray-300" id="conformPassword" name="conformPassword" type="password" placeholder="Confirm Password">
                </div>
            </div>
            <button class="rounded-xl bg-primary py-3 w-full text-white font-bold mt-5 hover:bg-primary-light">Register</button>
            <p class="mt-5">Already have an account? <a href="/login" class="text-gray-700 font-bold">Login</a></p>
        </form>
        
    </div>
</section>