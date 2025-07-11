@extends('layouts.front', ['pageTitle' => 'Dpp | Donation'])
@section('content')

<!-- Main Content -->
<div class="donation-wrapper">

    <!-- Payment Methods Section -->
    <section class="payment-section">
        <div class="container">
            <div class="payment-header">
                <div>
                    <h2 class="section-title">Choose Your Payment Method</h2> 
                </div>
                <p class="section-description">Multiple secure options available for your convenience</p>
                <div class="section-badge">Secure Payments</div>
            </div>

            <div class="payment-grid">
                <!-- National Bank -->
                <div class="payment-card bank-card">
                    <div class="card-header">
                        <div class="payment-logo">
                            <i class="fas fa-university"></i>
                        </div>
                        <div class="payment-name">
                            <h3>National Bank</h3>
                            <span>Malawi</span>
                        </div>
                    </div>
                    <div class="payment-details">
                        <div class="detail-item">
                            <span class="detail-label">Account Name</span>
                            <span class="detail-value">Democratic Progressive Party</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Account Number</span>
                            <span class="detail-value">1234-5678-9012-3456</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Branch</span>
                            <span class="detail-value">Main Branch, Lilongwe</span>
                        </div>
                    </div>
                </div>

                <!-- Standard Bank -->
                <div class="payment-card bank-card">
                    <div class="card-header">
                        <div class="payment-logo standard">
                            <i class="fas fa-building"></i>
                        </div>
                        <div class="payment-name">
                            <h3>Standard Bank</h3>
                            <span>Malawi</span>
                        </div>
                    </div>
                    <div class="payment-details">
                        <div class="detail-item">
                            <span class="detail-label">Account Name</span>
                            <span class="detail-value">Democratic Progressive Party</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Account Number</span>
                            <span class="detail-value">9876-5432-1098-7654</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Branch</span>
                            <span class="detail-value">City Centre, Blantyre</span>
                        </div>
                    </div>
                </div>

                <!-- Mobile Money -->
                <div class="payment-card mobile-card">
                    <div class="card-header">
                        <div class="payment-logo mobile">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <div class="payment-name">
                            <h3>Mobile Money</h3>
                            <span>TNM & Airtel</span>
                        </div>
                    </div>
                    <div class="payment-details">
                        <div class="detail-item">
                            <span class="detail-label">TNM Mpamba</span>
                            <span class="detail-value">0888-123-456</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Airtel Money</span>
                            <span class="detail-value">0999-654-321</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Reference</span>
                            <span class="detail-value">DPP Support</span>
                        </div>
                    </div>
                </div>

                <!-- PayPal -->
                <div class="payment-card paypal-card">
                    <div class="card-header">
                        <div class="payment-logo paypal">
                            <i class="fab fa-paypal"></i>
                        </div>
                        <div class="payment-name">
                            <h3>PayPal</h3>
                            <span>International</span>
                        </div>
                    </div>
                    <div class="payment-details">
                        <div class="detail-item">
                            <span class="detail-label">PayPal Email</span>
                            <span class="detail-value">donations@dpp.mw</span>
                        </div>
                        <div class="detail-item">
                            <span class="detail-label">Reference</span>
                            <span class="detail-value">DPP Donation</span>
                        </div>
                        <div class="security-note">
                            <i class="fas fa-shield-alt"></i>
                            <span>Secure international payments</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Impact Section -->
    <section class="donation-types-section">
        <div class="container">
            <div class="impact-header">
                <h2 class="section-title">Ways to Contribute</h2>
                <p class="section-description">Multiple avenues to support our democratic mission</p>
            </div>

            <div class="donation-features">
                <!-- Monetary Donations -->
                <div class="donation-feature"> 
                    <div class="feature-icon monetary">
                        <i class="fas fa-coins"></i>
                    </div>
                    <div class="feature-content">
                        <h3>Monetary Donations</h3>
                        <p>Direct financial contributions to support our operations and initiatives. These funds are allocated across all our programs based on priority needs.</p>
                    </div>
                </div>

                <!-- Materials & Supplies -->
                <div class="donation-feature">
                    <div class="feature-icon materials">
                        <i class="fas fa-boxes"></i>
                    </div>
                    <div class="feature-content">
                        <h3>Materials & Supplies</h3>
                        <p>Office equipment, stationery, and operational materials that keep our day-to-day activities running smoothly at all levels of the organization.</p>
                    </div>
                </div>

                <!-- Machinery & Vehicles -->
                <div class="donation-feature">
                    <div class="feature-icon machinery">
                        <i class="fas fa-truck"></i>
                    </div>
                    <div class="feature-content">
                        <h3>Machinery & Vehicles</h3>
                        <p>Transportation, generators, and heavy equipment that enable our campaign activities and logistical operations across the country.</p>
                    </div>
                </div>

                <!-- Other Contributions -->
                <div class="donation-feature">
                    <div class="feature-icon other">
                        <i class="fas fa-gift"></i>
                    </div>
                    <div class="feature-content">
                        <h3>Other Contributions</h3>
                        <p>Specialized items, services, or resources that can benefit our party affairs and programs. We evaluate all contributions for suitability.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
        min-height: 100vh;
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