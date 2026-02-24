@extends('layouts.app')
@section('title', 'Terms of Service | Unitas Movers')
@section('schema')
    <x-schema-json-ld :schemas="$schemas" />
@endsection
@section('content')
<section class="bg-primary py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-3xl lg:text-4xl font-extrabold text-white">Terms of Service</h1>
    </div>
</section>
<section class="py-12 lg:py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="prose prose-lg max-w-none">
            <p><strong>Last updated:</strong> {{ date('F Y') }}</p>
            <h2>Service Agreement</h2>
            <p>By booking moving services with Unitas Movers, you agree to these terms and conditions. A confirmed booking constitutes a binding agreement between you and Unitas Movers.</p>
            <h2>Pricing & Payment</h2>
            <p>All prices quoted are in Canadian dollars. Payment is due upon completion of the move. We accept cash, e-transfer, and major credit cards. Our quotes are based on the information you provide — significant changes to move scope may result in adjusted pricing.</p>
            <h2>Cancellation Policy</h2>
            <p>Cancellations made 48+ hours before the scheduled move receive a full refund. Cancellations within 48 hours may be subject to a cancellation fee.</p>
            <h2>Liability</h2>
            <p>Unitas Movers carries comprehensive liability insurance. Claims must be reported within 24 hours of move completion. We are not responsible for items packed by the customer unless a packing service was purchased.</p>
            <h2>Contact</h2>
            <p>For questions about these terms, contact us at info@unitasmovers.ca or call (403) 800-2747.</p>
        </div>
    </div>
</section>
@endsection
