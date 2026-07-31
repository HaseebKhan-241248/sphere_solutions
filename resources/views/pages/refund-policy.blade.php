@extends('layout.app')

@section('content')
    <section>
        <div class="relative py-32 text-center flex flex-col items-center justify-center overflow-hidden">

            <img src="{{ asset('images/about-hero.jpg') }}" alt="About Hero"
                 class="absolute inset-0 w-full h-full object-cover z-0">

            <div class="absolute inset-0 bg-black/10 z-10"></div>

            <div class="relative z-20">
                <h1 class="text-white text-5xl md:text-6xl font-bold tracking-wide mb-4">
                    Refund Policy
                </h1>
            </div>

        </div>
    </section>

    <section>
        <div class="flex flex-col max-w-[85%] mx-auto py-14 gap-6">
            <div class="space-y-6">
                <h1 class="text-2xl md:text-4xl font-semibold">
                    Refund Policy
                </h1>
                <p class="text-[#555555] font-sans text-md">
                    Dear valued clients, please take a moment to review our Refund Policy outlined below. Our commitment
                    to delivering top-notch service is reflected in our refund process, ensuring you receive maximum
                    benefits with each interaction. We strive to provide high-quality services tailored to meet all
                    aspects of your business needs. Refunds for design payments are extended as a courtesy to our
                    clients, but it’s important to note that our internal management retains the right to decline any
                    refund requests.
                </p>

                <p class="text-[#555555] font-sans text-md">
                    Explore our customer-friendly refund policy backed by a 30-day money-back guarantee for your recent
                    purchase. If our work falls short of your expectations, we offer a hassle-free refund process. In
                    instances of client dissatisfaction, our refund procedure ensures a swift resolution within 30
                    working days, with funds returned through convenient methods such as credits or direct deposit into
                    the client’s account.
                </p>

                <p class="text-[#555555] font-sans text-md">
                    Experience seamless refund processing with funds returned directly to the original credit or debit card provided during the transaction. Our commitment to customer satisfaction means refunds for website-related and unsatisfactory work concerns are promptly addressed with client approval. To initiate the refund process, customers simply need to communicate account details and reasons to our dedicated associates. Refunds and cancellations are typically issued in the following circumstances for your convenience.
                </p>

                <div class="space-y-8 px-3">
                    <li class="text-[#555555] font-sans text-md">
                        <ol class="text-[#555555] font-sans text-md">
                            In the event of non-receipt of the product due to email provider or mail server issues, please reach out to us for prompt assistance. Claims related to non-delivery should be submitted in writing to our Billing Department within 30 days from the delivery date. Failure to do so may result in the product being considered received and downloaded. Feel free to contact us for any support regarding email delivery concerns.
                        </ol>
                    </li>
                    <li class="text-[#555555] font-sans text-md">
                        <ol class="text-[#555555] font-sans text-md">
                            Encountering challenges with downloading or unzipping our product? Reach out to our dedicated Technical Support Department to address and resolve these issues promptly. It’s crucial to contact us within the specified timeframe; otherwise, we may consider silence as a successful product download, with no further right to redress or refund for a “download issue” reason. Please note that failure to seek assistance for download or unzipping problems within 30 days may lead to a decline in refund eligibility. Your satisfaction is our priority, and our support team is here to help.
                        </ol>
                    </li>
                    <li class="text-[#555555] font-sans text-md">
                        <ol class="text-[#555555] font-sans text-md">
                            While our products undergo rigorous testing prior to release, unforeseen errors may arise. If you encounter major defects, submit them for approval by our Technical Support Team. We reserve the right to rectify errors or defects within 72 hours. If an approved deficiency is not corrected within this timeframe, a full refund will be issued without compensations. Alternatively, customers may opt for a replacement of equal or similar value. Note that our technicians may request temporary access to your server for issue identification and resolution. Timely access is crucial, and failure to provide it may result in delayed issue resolution. Refusal to grant server access renders you ineligible for a refund. Your satisfaction is our priority, and we are committed to resolving any unexpected issues promptly.
                        </ol>
                    </li>
                    <li class="text-[#555555] font-sans text-md">
                        <ol class="text-[#555555] font-sans text-md">Encountered a product that doesn’t match its description? Report such concerns to our Technical Support Department within 30 days of delivery. Ensure to provide clear evidence substantiating that the purchased product deviates from its website description. Please note that complaints arising from false expectations or wishes won’t be honored; we prioritize addressing genuine discrepancies. Your satisfaction is important to us, and we’re here to assist you in resolving any issues related to product descriptions.
                        </ol>
                    </li>
                </div>
            </div>

            <div class="space-y-6">
                <h1 class="text-2xl md:text-4xl font-semibold">
                    Children’s Policy
                </h1>
                <p class="text-[#555555] font-sans text-md">
                    Access to our product is restricted to individuals aged 18 or older. Our products are not intended for anyone under the age of 13 (“Children”). We do not knowingly gather personally identifiable information from children under 13. If you are a parent or guardian and discover that your children have shared Personal Information with us, please get in touch. In the event that we discover the collection of Personal Information from a child under 13 without verified parental consent, we take prompt action to remove the information and cancel the order. Your understanding and cooperation in this matter are appreciated.
                </p>
            </div>
        </div>
    </section>
@endsection
