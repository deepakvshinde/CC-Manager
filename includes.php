<?php if (!defined('ABSPATH')) exit; // Exit if accessed directly

// lib
include 'lib/AB_BookingConfiguration.php';
include 'lib/AB_Controller.php';
include 'lib/AB_Entity.php';
include 'lib/AB_EntityManager.php';
include 'lib/AB_Form.php';
include 'lib/AB_ImageResize.php';
include 'lib/AB_NotificationCodes.php';
include 'lib/AB_NotificationSender.php';
include 'lib/AB_Validator.php';
// lib/utils
include 'lib/utils/AB_CommonUtils.php';
include 'lib/utils/AB_DateInterval.php';
include 'lib/utils/AB_DateTime.php';
include 'lib/utils/AB_DateTimeUtils.php';
// lib/entities
include 'lib/entities/AB_Appointment.php';
include 'lib/entities/AB_Category.php';
include 'lib/entities/AB_Coupon.php';
include 'lib/entities/AB_Customer.php';

include 'lib/entities/AB_Studio.php';


include 'lib/entities/AB_CustomerAppointment.php';
include 'lib/entities/AB_EmailNotification.php';
include 'lib/entities/AB_Notification.php';
include 'lib/entities/AB_Payment.php';
include 'lib/entities/AB_ScheduleItemBreak.php';
include 'lib/entities/AB_Service.php';
include 'lib/entities/AB_Staff.php';
include 'lib/entities/AB_StaffScheduleItem.php';
include 'lib/entities/AB_StaffService.php';
// backend/modules
include 'backend/modules/appearance/AB_AppearanceController.php';
include 'backend/modules/calendar/AB_CalendarController.php';
include 'backend/modules/calendar/forms/AB_AppointmentForm.php';
include 'backend/modules/coupons/AB_CouponsController.php';
include 'backend/modules/coupons/forms/AB_CouponForm.php';
include 'backend/modules/custom_fields/AB_CustomFieldsController.php';
include 'backend/modules/customer/AB_CustomerController.php';
include 'backend/modules/customer/forms/AB_CustomerForm.php';

include 'backend/modules/studio/AB_StudioController.php';
include 'backend/modules/studio/forms/AB_StudioForm.php';

include 'backend/modules/notifications/AB_NotificationsController.php';
include 'backend/modules/notifications/forms/AB_NotificationsForm.php';
include 'backend/modules/payment/AB_PaymentController.php';
include 'backend/modules/service/AB_ServiceController.php';
include 'backend/modules/service/forms/AB_CategoryForm.php';
include 'backend/modules/service/forms/AB_ServiceForm.php';
include 'backend/modules/settings/AB_SettingsController.php';
include 'backend/modules/settings/forms/AB_CompanyForm.php';
include 'backend/modules/settings/forms/AB_PaymentsForm.php';
include 'backend/modules/settings/forms/AB_BusinessHoursForm.php';
include 'backend/modules/staff/AB_StaffController.php';
include 'backend/modules/staff/forms/AB_StaffMemberForm.php';
include 'backend/modules/staff/forms/AB_StaffMemberEditForm.php';
include 'backend/modules/staff/forms/AB_StaffMemberNewForm.php';
include 'backend/modules/staff/forms/AB_StaffScheduleForm.php';
include 'backend/modules/staff/forms/AB_StaffScheduleItemBreakForm.php';
include 'backend/modules/staff/forms/AB_StaffServicesForm.php';
include 'backend/modules/staff/forms/widget/AB_TimeChoiceWidget.php';
include 'backend/modules/tinymce/AB_TinyMCE_Plugin.php';
include 'backend/modules/appointments/AB_AppointmentsController.php';
// frontend/modules
include 'frontend/modules/authorize.net/AB_AuthorizeNetController.php';
include 'frontend/modules/booking/AB_BookingController.php';
include 'frontend/modules/booking/lib/AB_UserBookingData.php';
include 'frontend/modules/booking/lib/AB_AvailableTime.php';
include 'frontend/modules/customer_profile/AB_CustomerProfileController.php';
include 'frontend/modules/paypal/AB_PayPalController.php';
include 'frontend/modules/stripe/AB_StripeController.php';
include 'frontend/modules/woocommerce/AB_WooCommerceController.php';

include 'backend/AB_Backend.php';
include 'frontend/AB_Frontend.php';
include 'installer.php';
include 'updates.php';