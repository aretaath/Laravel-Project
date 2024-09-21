<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <main>
        <div class="bg-white py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <!-- Heading and Description -->
                <div class="text-center">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Meet our leadership</h2>
                    <p class="mt-6 text-lg leading-8 text-gray-600">Libero fames augue nisl porttitor nisi, quis. Id ac elit odio vitae elementum enim vitae ullamcorper suspendisse.</p>
                </div>

                <!-- Leadership Team Members -->
                <ul role="list" class="mt-12 grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:grid-cols-3">
                    <li>
                        <x-team-member 
                            name="Alidrus Smith" 
                            position="Head City Coordinator" 
                            image="https://images.freeimages.com/365/images/istock/previews/1072/107290489-girl-icon-cartoon-single-avatar-people-icon.jpg" 
                        />
                    </li>

                    <li>
                        <x-team-member 
                            name="Catlya Tan" 
                            position="Vice City Coordinator" 
                            image="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS0sCAvrW1yFi0UYMgTZb113I0SwtW0dpby8Q&s" 
                        />
                    </li>

                    <li>
                        <x-team-member 
                            name="Sarah OLiver" 
                            position="Secretary" 
                            image="https://cdn-icons-png.freepik.com/512/145/145967.png" 
                        />
                    </li>

                    <li>
                        <x-team-member 
                            name="Gina Hans" 
                            position="Treasurer" 
                            image="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQM_n6ErNu-4yic81czJtpp9YIe-uAPhGBGqwLtr_Roe880DAeiKe4BX9SHUYtymkxlMHI&usqp=CAU" 
                        />
                    </li>

                    <li>
                        <x-team-member 
                            name="Lucas Andres" 
                            position="Head of Event Planner Team" 
                            image="data:image/png;base64,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" 
                        />
                    </li>

                    <li>
                        <x-team-member 
                            name="Ian Dean" 
                            position="Head of Public Relation Team" 
                            image="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSMc42I-xlvAtHnXQblHOYQX-gA2hDDpS7D5nMsLO-sV7pJyl-Da0diAaNpQx_IzrTA92I&usqp=CAU" 
                        />
                    </li>

                </ul>
            </div>
        </div>
    </main>
</x-layout>
