
   <div class="vm-section">

     <style>
       .vm-section {
         background: #0b2c3d;
         padding: 60px 0;
       }

       .vm-section .row {
         display: flex;
         flex-wrap: wrap;
       }

       .vm-section .col-md-4,
       .vm-section .col-sm-6,
       .vm-section .col-12 {
         display: flex;
       }

       .vm-card {
         flex: 1;
       }





       .vm-card {
         background: white;
         border-radius: 18px;
         padding: 30px 22px;
         height: 100%;
         text-align: center;
         display: flex;

         flex-direction: column;

         box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
         transition: all 0.3s ease;
       
       }

       .vm-content-panel {
         flex-grow: 0;

         border-radius: 12px;
         padding: 18px 16px;
         margin: 15px 0 20px;
         box-shadow: 0 6px 18px rgba(0, 0, 0, 0.12);
       }




       /*  .vm-card::before {
         content: "";
         position: absolute;
         inset: 0;
         background: rgba(255, 255, 255, 0.85);
         z-index: 0;
         border-radius: 16px;
       } */

       .vm-card>* {
         position: relative;
         z-index: 1;
       }


       .vm-card h4 {
         color: #0b2c3d;
       }

       .vm-text {
         color: #333;
         line-height: 1.6;
       }

       .vm-card:hover {
         transform: translateY(-8px);
       }

       .vm-icon {
         font-size: 40px;
         color: #0b2c3d;
         margin-bottom: 15px;
         display: inline-block;
       }

       .vm-card h4 {
         font-weight: 700;
         margin-bottom: 15px;
       }

       .vm-text {
         font-size: 14px;
         color: #555;
         margin-bottom: 20px;
       }

       /* Limit text height */
       .clamp {
         display: -webkit-box;
         -webkit-line-clamp: 5;
         -webkit-box-orient: vertical;
         overflow: hidden;
       }

       .read-more-btn {
         background: transparent;
         border: 2px solid #0b2c3d;
         color: #0b2c3d;
         padding: 8px 20px;
         border-radius: 30px;
         font-size: 13px;
         cursor: pointer;
         transition: 0.3s;
         margin-top: auto;
         align-self: center;

       }

       .read-more-btn:hover {
         background: #0b2c3d;
         color: #fff;
       }

       .vcon{
          margin-bottom:  20px !important;
       }
     </style>
     <div class="container">
       <div class="row">

         <!-- Vision -->
         <div class="col-md-4 col-sm-6 col-12 vcon">
           <div class="vm-card">
             <span class="vm-icon"><i class="fa fa-eye"></i></span>
             <h4>Our Vision</h4>
             <div class="vm-content-panel">
               <div class="vm-text clamp">
                 <?php echo $vision->body; ?>
               </div>
             </div>

             <button class="read-more-btn"
               data-title="Our Vision"
               data-content="<?php echo htmlspecialchars($vision->body); ?>">
               Read More
             </button>
           </div>
         </div>

         <!-- Mission -->
         <div class="col-md-4 col-sm-6 col-12 vcon">
           <div class="vm-card">
             <span class="vm-icon"><i class="fa fa-bullseye"></i></span>
             <h4>Our Mission</h4>
             <div class="vm-content-panel">
               <div class="vm-text clamp">
                 <?php echo $mission->body; ?>
               </div>
             </div>
             <button class="read-more-btn"
               data-title="Our Mission"
               data-content="<?php echo htmlspecialchars($mission->body); ?>">
               Read More
             </button>
           </div>
         </div>

         <!-- Mandate -->
         <div class="col-md-4 col-sm-12 col-12 vcon">
           <div class="vm-card">
             <span class="vm-icon"><i class="fa fa-flag"></i></span>
             <h4>Our Mandate</h4>
             <div class="vm-content-panel">
               <div class="vm-text clamp">
                 <?php echo $mandate->body; ?>
               </div>
             </div>
             <button class="read-more-btn"
               data-title="Our Mandate"
               data-content="<?php echo htmlspecialchars($mandate->body); ?>">
               Read More
             </button>
           </div>
         </div>

       </div>
     </div>
   </div>
