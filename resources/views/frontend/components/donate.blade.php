@extends('layouts.front', ['pageTitle' => 'DPP | Donation'])
@section('content')

<!-- Main Content -->
<div class="donation-wrapper">


<div class="grid grid-cols-1" style="height: 100px; background: linear-gradient(to bottom right, rgba(230, 30, 43, 0.9), rgba(230, 30, 43, 0.9)), url('assets/images/slider_img_3.png') " > 
        <div class="grid grid-cols-1" >
            <div class="flex items-center  justify-center" ><h1 class="text-3xl pt-24 text-white font-bold" >Donations may be made through the following accounts</h1></div>
        </div>
    </div>
    <div class="w-full px-4 py-10 max-w-7xl mx-auto">

    <!-- Information Cards -->
    <div class="w-full grid grid-cols-1 md:grid-cols-3  gap-4">
        <!-- Address Card -->
        <div class="bg-white p-10 rounded-xl shadow-md location-card">
            <div class="flex items-start">
                <div class="flex items-center justify-center">
                    <img class="w-full " src="{{ asset('assets/images/fdh.png')}}" />
                </div>
            </div>
        </div>
        
        <!-- Contact Card -->
        <div class="bg-white rounded-xl shadow-md location-card">
            <div class="flex items-start pt-10 pl-8 ">
                <div class="flex items-center justify-center">
                    <img class="w-3/4 p-8 mt-4" src="{{ asset('assets/images/mpamba.png')}}" />
                </div>
            </div>
        </div>
        <div class="bg-white rounded-xl shadow-md location-card">
            <div class="flex items-start pt-10 pl-8 ">
                <div class="flex items-center justify-center">
                    <img class="w-3/4 p-8 mt-10" src="{{ asset('assets/images/airtel.png')}}" />
                </div>
            </div>
        </div>
        
        
    </div>
</div>

<style>
    :root {
        --primary-color: #2563eb;
        --secondary-color: #f59e0b;
        --accent-color: #10b981;
        --dark-color: #1e293b;
        --light-color: #f8fafc;
        --gradient-1: linear-gradient(135deg, #090040 0%, #749BC2  100%);
        --gradient-2: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        --gradient-3: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        line-height: 1.6;
        color: var(--dark-color);
        overflow-x: hidden;
    }


    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 2rem;
    }

    .donation-wrapper {
        background: linear-gradient(180deg, #f8fafc 0%, #e2e8f0 100%);
        
    }

    /* Section Styles */
    .section-badge {
        display: inline-block;
        background: var(--gradient-1);
        color: white;
        padding: 0.5rem 1.5rem;
        border-radius: 50px;
        font-size: 0.9rem;
        font-weight: 600;
        margin-bottom: 1rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .section-title {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
        background: var(--gradient-1);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .section-description {
        font-size: 1.1rem;
        color: #64748b;
        max-width: 600px;
        margin: 0 auto;
        line-height: 1.8;
    }

    /* Payment Section */
    .payment-section {
        padding: 6rem 0;
        background: #f8fafc;
    }

    .payment-header {
        text-align: center;
        margin-bottom: 4rem;
    }

    .payment-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 2rem;
    }

    .payment-card {
        background: white;
        border-radius: 20px;
        padding: 2rem;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: 1px solid #e2e8f0;
        position: relative;
        overflow: hidden;
    }

    .payment-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15);
    }

    .card-header {
        display: flex;
        align-items: center;
        margin-bottom: 2rem;
        padding-bottom: 1rem;
        border-bottom: 2px solid #f1f5f9;
    }

    .payment-logo {
        width: 60px;
        height: 60px;
        background: var(--gradient-1);
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 1rem;
    }

    .payment-logo i {
        font-size: 1.5rem;
        color: white;
    }

    .payment-logo.standard { background: var(--gradient-2); }
    .payment-logo.mobile { background: var(--gradient-3); }
    .payment-logo.paypal { background: linear-gradient(135deg, #0070ba 0%, #003087 100%); }

    .payment-name h3 {
        font-size: 1.3rem;
        font-weight: 600;
        margin-bottom: 0.25rem;
    }

    .payment-name span {
        color: #64748b;
        font-size: 0.9rem;
    }

    .payment-details {
        space-y: 1rem;
    }

    .detail-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.75rem 0;
        border-bottom: 1px solid #f1f5f9;
    }

    .detail-item:last-child {
        border-bottom: none;
    }

    .detail-label {
        font-weight: 500;
        color: #475569;
    }

    .detail-value {
        font-family: 'JetBrains Mono', monospace;
        background: #f1f5f9;
        padding: 0.25rem 0.75rem;
        border-radius: 8px;
        font-size: 0.9rem;
        font-weight: 500;
    }

    .security-note {
        margin-top: 1rem;
        padding: 0.75rem;
        background: #ecfdf5;
        border-radius: 8px;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: #065f46;
        font-size: 0.9rem;
    }

    /* Impact Section */
    .donation-types-section {
        padding: 4rem 0;
        background: white;
    }

    .donation-features {
    
        margin: 2rem auto 0;
    }

    .impact-header {
        text-align: center;
        margin: 0 auto;
        padding: 2rem 0;
    }

    .donation-feature {
        display: flex;
        gap: 1.5rem;
        align-items: flex-start;
        padding: 1.5rem 0;
        border-bottom: 1px solid rgba(0,0,0,0.1);
    }

    .donation-feature:last-child {
        border-bottom: none;
    }

    .feature-icon {
        font-size: 1.75rem;
        color: white;
        background: var(--primary-color);
        padding: 1rem;
        border-radius: 12px;
        min-width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .feature-content {
        flex: 1;
    }

    .feature-content h3 {
        margin-top: 0;
        margin-bottom: 0.5rem;
        color: var(--dark-color);
    }

    .feature-content p {
        margin: 0;
        color: #64748b;
        line-height: 1.7;
    }

    /* Icon Color Variants */
    .feature-icon.monetary { background: #28a745; }
    .feature-icon.materials { background: #17a2b8; }
    .feature-icon.machinery { background: #ffc107; }
    .feature-icon.other { background: #6f42c1; }

    /* Responsive Design */
    @media (max-width: 768px) {
        .section-title {
            font-size: 2rem;
        }

        .container {
            padding: 0 1rem;
        }

        .payment-grid {
            grid-template-columns: 1fr;
        }

        .payment-card {
            padding: 2rem;
        }
    }

    @media (max-width: 480px) {
        .payment-card {
            padding: 1.5rem;
        }

        .card-header {
            flex-direction: column;
            text-align: center;
            gap: 1rem;
        }

        .payment-logo {
            margin-right: 0;
        }

        .donation-feature {
            flex-direction: column;
            gap: 1rem;
        }
        
        .feature-icon {
            align-self: center;
        }
    }
</style>

@endsection