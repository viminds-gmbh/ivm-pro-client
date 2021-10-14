<?php

namespace Qbus\IvmProClient\Model;

class Unit
{
    protected $flat_id;
    protected $flat_keynumber;
    protected $flat_we;
    protected $flat_housenr;
    protected $flat_number;
    protected $flat_pseudo_we;
    protected $flat_pseudo_housenr;
    protected $flat_owner_id;
    protected $flat_street;
    protected $flat_zip;
    protected $flat_city;
    protected $flat_space;
    protected $flat_space_expose;
    protected $flat_gebaeudewohnflaeche;
    protected $flat_plotarea;
    protected $flat_rooms;
    protected $flat_rooms_expose;
    protected $flat_floor;
    protected $flat_floorscount;
    protected $flat_direction;
    protected $flat_direction_hausansicht;
    protected $flat_expansion_hausansicht;
    protected $virt_bemerkung;
    protected $virt_typ;
    protected $virt_position;
    protected $virt_behindert;
    protected $flat_internet;
    protected $flat_terminal;
    protected $flat_locked;
    protected $flat_free;
    protected $flat_date;
    protected $flat_rent_date;
    protected $flat_contract_date;
    protected $flat_contract_partner;
    protected $flat_contract_number;
    protected $flat_usenr;
    protected $flat_arrangernr;
    protected $flat_arranger;
    protected $flat_rent;
    protected $flat_deposit;
    protected $flat_charges;
    protected $flat_heating;
    protected $flat_special;
    protected $flat_special_text;
    protected $flat_wbs;
    protected $flat_wbs_note;
    protected $flat_note;
    protected $flat_note_print;
    protected $flat_energyconsumption;
    protected $flat_lights;
    protected $flat_image;
    protected $flat_image_titel;
    protected $flat_plot;
    protected $flat_plot_titel;
    protected $flat_plot_2;
    protected $flat_plot_2_titel;
    protected $flat_status;
    protected $flat_status_edit;
    protected $flat_technician;
    protected $flat_electricmeter;
    protected $flat_year;
    protected $flat_exposetitle;
    protected $flat_objectdescription;
    protected $flat_objectdescription_print;
    protected $flat_miscellaneous;
    protected $flat_miscellaneous_print;
    protected $flat_description;
    protected $flat_deleted;
    protected $flat_asset;
    protected $amount_clients;
    protected $flat_plus_coldwater;
    protected $flat_responsible;
    protected $marker_lat;
    protected $marker_lng;
    protected $flat_import;
    protected $flat_heating_space;
    protected $flat_nostat;
    protected $flat_searchable;
    protected $flat_insteinheit;
    protected $flat_liegenschaftsnr;
    protected $flat_nutzernr;
    protected $flat_energie;
    protected $flat_enev_gebaeudetyp;
    protected $flat_enev_gebaeudeflaeche;
    protected $flat_enev_anz_we;
    protected $flat_enev_ausweisart;
    protected $flat_enev_bedarfswert;
    protected $flat_enev_verbrauchswert;
    protected $flat_enev_year_anlage;
    protected $flat_enev_gueltig_bis;
    protected $flat_enev_warmwasserenthalten;
    protected $flat_enev_warmwasserversorgung;
    protected $portal_wohnungstyp;
    protected $portal_garagenzahl;
    protected $portal_etagenanzahl;
    protected $portal_schlafanzahl;
    protected $portal_badanzahl;
    protected $portal_heizkostenenthalten;
    protected $portal_garageart;
    protected $portal_haustiere;
    protected $portal_objektzustand;
    protected $portal_modernisierung;
    protected $portal_intquality;
    protected $portal_denkmalschutz;
    protected $portal_objektart;
    protected $portal_objektart_oi;
    protected $portal_heatingType;
    protected $portal_bodenbelag;
    protected $portal_envquality;
    protected $portal_klimaanlage;
    protected $portal_heizungsart;
    protected $portal_befeuerungsart;
    protected $portal_energietyp;
    protected $portal_space;
    protected $portal_space_use;
    protected $flat_exposetitle_1;
    protected $flat_objectdescription_1;
    protected $flat_note_1;
    protected $flat_miscellaneous_1;
    protected $gw_bettwaesche;
    protected $gw_bettwaesche2;
    protected $gw_bettwaesche3;
    protected $gw_bettwaesche4;
    protected $gw_bettwaesche5;
    protected $gw_bettwaesche6;
    protected $gw_bettwaesche_firma;
    protected $gw_endreinigung;
    protected $gw_endreinigung_firma;
    protected $gw_tag;
    protected $gw_tag2;
    protected $gw_tag3;
    protected $gw_tag4;
    protected $erp_note;
    protected $gw_satz;
    protected $gw_satz_nm;
    protected $gw_waesche;
    protected $gw_extras;
    protected $gw_maxpers;
    protected $gw_iban;
    protected $gw_rabatt;
    protected $distanceAirport;
    protected $distanceMRS;
    protected $distanceFM;
    protected $distancePT;
    protected $havarie_gas;
    protected $havarie_wasser;
    protected $havarie_strom;
    protected $havarie_ha;
    protected $havarie_photo;
    protected $havarie_bemerkung;
    protected $flat_instandh_einh;
    protected $leergrdtext;
    protected $portal_ausstattung;
    protected $id_extern;
    protected $verantwortlich_1;
    protected $verantwortlich_2;
    protected $verantwortlich_3;
    protected $verantwortlich_4;
    protected $verantwortlich_5;
    protected $verantwortlich_6;
    protected $schluessel_leerzylinder;
    protected $schluessel_bauzylinder;
    protected $iv_externalID;
    protected $amortisationsdauer;
    protected $amortisationsgrund;
    protected $amortisationsbemerkung;
    protected $flat_video_link;
    protected $flat_search_results_note;
    protected $reserve_id;
    protected $client_id;
    protected $reserve_time;
    protected $reserve_info;
    protected $reserve_timestamp;
    protected $reserve_author;
    protected $reserve_time_real;
    protected $insertdatum;
    protected $district_id;
    protected $district_name;
    protected $district_description;
    protected $district_marker;
    protected $district_desc_print;
    protected $district_list_print;
    protected $district_city;
    protected $district_link;
    protected $history_id;
    protected $process_id;
    protected $termin_id;
    protected $acceptance_id;
    protected $letter_id;
    protected $contract_id;
    protected $history_headline;
    protected $history_text;
    protected $history_type;
    protected $history_agent;
    protected $history_team_id;
    protected $history_object;
    protected $history_objectid;
    protected $history_timestamp;
    protected $favorit;
    protected $favorit_agent;
    protected $export_id;
    protected $export_type;
    protected $export_date;
    protected $export_status;
    protected $export_arranger;
    protected $export_timestamp;
    protected $export_exposeid;
    protected $we;
    protected $housenr;
    protected $bemerkung;
    protected $heizung_fremdanbieter;
    protected $hausansicht_hausprio;
    protected $rendite;
    protected $renditeerwartung;
    protected $baseprice;
    protected $Mlat;
    protected $Mlng;
    protected $flat_rentdate;
    protected $tmp_flat_id;
    protected $history_nof;
    protected $district_lat;
    protected $district_lon;
    protected $id;
    protected $rent_all;
    protected $flat_prices;
    protected $rent_plain;
    protected $rent;
    protected $charges;
    protected $heating;
    protected $deposit;
    protected $extra;
    protected $flat_repair;
    protected $repair;
    protected $parking;
    protected $parking_charges;
    protected $garage;
    protected $garage_charges;
    protected $special;
    protected $flat_umbauwohnung;
    protected $keynumber;
    protected $number;
    protected $street;
    protected $streetnumber;
    protected $zip;
    protected $city;
    protected $space;
    protected $rooms;
    protected $floor;
    protected $directionnr;
    protected $direction;
    protected $arrangernr;
    protected $internet;
    protected $terminal;
    protected $date;
    protected $rentdate;
    protected $usenr;
    protected $contract_date;
    protected $contract_partner;
    protected $contract_number;
    protected $arranger;
    protected $responsible;
    protected $special_text;
    protected $wbs;
    protected $wbs_note;
    protected $status;
    protected $exposetitle;
    protected $note;
    protected $objectdescription;
    protected $miscellaneous;
    protected $note_print;
    protected $objectdescription_print;
    protected $miscellaneous_print;
    protected $technician;
    protected $electricmeter;
    protected $description_number;
    protected $vb;
    protected $enev_gebaeudetyp;
    protected $enev_gebaeudeflaeche;
    protected $enev_anz_we;
    protected $enev_ausweisart;
    protected $enev_bedarfswert;
    protected $enev_verbrauchswert;
    protected $enev_year_anlage;
    protected $energyconsumption;
    protected $enev_gueltig_bis;
    protected $enev_warmwasserenthalten;
    protected $enev_warmwasserversorgung;
    protected $lights;
    protected $year;
    protected $image;
    protected $plot;
    protected $environmet;
    protected $environment_detail_1;
    protected $environment_int;
    protected $environment_raum;
    protected $environment_gemeinschaftl;
    protected $environment_umgebung;
    protected $environment_technik;
    protected $environments;
    protected $arranger_name;
    protected $arranger_phone;
    protected $arranger_fax;
    protected $arranger_email;
    protected $gallery_img;

    public function __construct(array $properties)
    {
        foreach ($properties as $property => $value) {
            if (property_exists($this, $property) === false) {
                trigger_error('Cannot set unknown property ' . $property, E_USER_WARNING);
                continue;
            }

            $this->$property = $value;
        }
    }

    public function getFlat_id()
    {
        return $this->flat_id;
    }

    public function getFlat_keynumber()
    {
        return $this->flat_keynumber;
    }

    public function getFlat_we()
    {
        return $this->flat_we;
    }

    public function getFlat_housenr()
    {
        return $this->flat_housenr;
    }

    public function getFlat_number()
    {
        return $this->flat_number;
    }

    public function getFlat_pseudo_we()
    {
        return $this->flat_pseudo_we;
    }

    public function getFlat_pseudo_housenr()
    {
        return $this->flat_pseudo_housenr;
    }

    public function getFlat_owner_id()
    {
        return $this->flat_owner_id;
    }

    public function getFlat_street()
    {
        return $this->flat_street;
    }

    public function getFlat_zip()
    {
        return $this->flat_zip;
    }

    public function getFlat_city()
    {
        return $this->flat_city;
    }

    public function getFlat_space()
    {
        return $this->flat_space;
    }

    public function getFlat_space_expose()
    {
        return $this->flat_space_expose;
    }

    public function getFlat_gebaeudewohnflaeche()
    {
        return $this->flat_gebaeudewohnflaeche;
    }

    public function getFlat_plotarea()
    {
        return $this->flat_plotarea;
    }

    public function getFlat_rooms()
    {
        return $this->flat_rooms;
    }

    public function getFlat_rooms_expose()
    {
        return $this->flat_rooms_expose;
    }

    public function getFlat_floor()
    {
        return $this->flat_floor;
    }

    public function getFlat_floorscount()
    {
        return $this->flat_floorscount;
    }

    public function getFlat_direction()
    {
        return $this->flat_direction;
    }

    public function getFlat_direction_hausansicht()
    {
        return $this->flat_direction_hausansicht;
    }

    public function getFlat_expansion_hausansicht()
    {
        return $this->flat_expansion_hausansicht;
    }

    public function getVirt_bemerkung()
    {
        return $this->virt_bemerkung;
    }

    public function getVirt_typ()
    {
        return $this->virt_typ;
    }

    public function getVirt_position()
    {
        return $this->virt_position;
    }

    public function getVirt_behindert()
    {
        return $this->virt_behindert;
    }

    public function getFlat_internet()
    {
        return $this->flat_internet;
    }

    public function getFlat_terminal()
    {
        return $this->flat_terminal;
    }

    public function getFlat_locked()
    {
        return $this->flat_locked;
    }

    public function getFlat_free()
    {
        return $this->flat_free;
    }

    public function getFlat_date()
    {
        return $this->flat_date;
    }

    public function getFlat_rent_date()
    {
        return $this->flat_rent_date;
    }

    public function getFlat_contract_date()
    {
        return $this->flat_contract_date;
    }

    public function getFlat_contract_partner()
    {
        return $this->flat_contract_partner;
    }

    public function getFlat_contract_number()
    {
        return $this->flat_contract_number;
    }

    public function getFlat_usenr()
    {
        return $this->flat_usenr;
    }

    public function getFlat_arrangernr()
    {
        return $this->flat_arrangernr;
    }

    public function getFlat_arranger()
    {
        return $this->flat_arranger;
    }

    public function getFlat_rent()
    {
        return $this->flat_rent;
    }

    public function getFlat_deposit()
    {
        return $this->flat_deposit;
    }

    public function getFlat_charges()
    {
        return $this->flat_charges;
    }

    public function getFlat_heating()
    {
        return $this->flat_heating;
    }

    public function getFlat_special()
    {
        return $this->flat_special;
    }

    public function getFlat_special_text()
    {
        return $this->flat_special_text;
    }

    public function getFlat_wbs()
    {
        return $this->flat_wbs;
    }

    public function getFlat_wbs_note()
    {
        return $this->flat_wbs_note;
    }

    public function getFlat_note()
    {
        return $this->flat_note;
    }

    public function getFlat_note_print()
    {
        return $this->flat_note_print;
    }

    public function getFlat_energyconsumption()
    {
        return $this->flat_energyconsumption;
    }

    public function getFlat_lights()
    {
        return $this->flat_lights;
    }

    public function getFlat_image()
    {
        return $this->flat_image;
    }

    public function getFlat_image_titel()
    {
        return $this->flat_image_titel;
    }

    public function getFlat_plot()
    {
        return $this->flat_plot;
    }

    public function getFlat_plot_titel()
    {
        return $this->flat_plot_titel;
    }

    public function getFlat_plot_2()
    {
        return $this->flat_plot_2;
    }

    public function getFlat_plot_2_titel()
    {
        return $this->flat_plot_2_titel;
    }

    public function getFlat_status()
    {
        return $this->flat_status;
    }

    public function getFlat_status_edit()
    {
        return $this->flat_status_edit;
    }

    public function getFlat_technician()
    {
        return $this->flat_technician;
    }

    public function getFlat_electricmeter()
    {
        return $this->flat_electricmeter;
    }

    public function getFlat_year()
    {
        return $this->flat_year;
    }

    public function getFlat_exposetitle()
    {
        return $this->flat_exposetitle;
    }

    public function getFlat_objectdescription()
    {
        return $this->flat_objectdescription;
    }

    public function getFlat_objectdescription_print()
    {
        return $this->flat_objectdescription_print;
    }

    public function getFlat_miscellaneous()
    {
        return $this->flat_miscellaneous;
    }

    public function getFlat_miscellaneous_print()
    {
        return $this->flat_miscellaneous_print;
    }

    public function getFlat_description()
    {
        return $this->flat_description;
    }

    public function getFlat_deleted()
    {
        return $this->flat_deleted;
    }

    public function getFlat_asset()
    {
        return $this->flat_asset;
    }

    public function getAmount_clients()
    {
        return $this->amount_clients;
    }

    public function getFlat_plus_coldwater()
    {
        return $this->flat_plus_coldwater;
    }

    public function getFlat_responsible()
    {
        return $this->flat_responsible;
    }

    public function getMarker_lat()
    {
        return $this->marker_lat;
    }

    public function getMarker_lng()
    {
        return $this->marker_lng;
    }

    public function getFlat_import()
    {
        return $this->flat_import;
    }

    public function getFlat_heating_space()
    {
        return $this->flat_heating_space;
    }

    public function getFlat_nostat()
    {
        return $this->flat_nostat;
    }

    public function getFlat_searchable()
    {
        return $this->flat_searchable;
    }

    public function getFlat_insteinheit()
    {
        return $this->flat_insteinheit;
    }

    public function getFlat_liegenschaftsnr()
    {
        return $this->flat_liegenschaftsnr;
    }

    public function getFlat_nutzernr()
    {
        return $this->flat_nutzernr;
    }

    public function getFlat_energie()
    {
        return $this->flat_energie;
    }

    public function getFlat_enev_gebaeudetyp()
    {
        return $this->flat_enev_gebaeudetyp;
    }

    public function getFlat_enev_gebaeudeflaeche()
    {
        return $this->flat_enev_gebaeudeflaeche;
    }

    public function getFlat_enev_anz_we()
    {
        return $this->flat_enev_anz_we;
    }

    public function getFlat_enev_ausweisart()
    {
        return $this->flat_enev_ausweisart;
    }

    public function getFlat_enev_bedarfswert()
    {
        return $this->flat_enev_bedarfswert;
    }

    public function getFlat_enev_verbrauchswert()
    {
        return $this->flat_enev_verbrauchswert;
    }

    public function getFlat_enev_year_anlage()
    {
        return $this->flat_enev_year_anlage;
    }

    public function getFlat_enev_gueltig_bis()
    {
        return $this->flat_enev_gueltig_bis;
    }

    public function getFlat_enev_warmwasserenthalten()
    {
        return $this->flat_enev_warmwasserenthalten;
    }

    public function getFlat_enev_warmwasserversorgung()
    {
        return $this->flat_enev_warmwasserversorgung;
    }

    public function getPortal_wohnungstyp()
    {
        return $this->portal_wohnungstyp;
    }

    public function getPortal_garagenzahl()
    {
        return $this->portal_garagenzahl;
    }

    public function getPortal_etagenanzahl()
    {
        return $this->portal_etagenanzahl;
    }

    public function getPortal_schlafanzahl()
    {
        return $this->portal_schlafanzahl;
    }

    public function getPortal_badanzahl()
    {
        return $this->portal_badanzahl;
    }

    public function getPortal_heizkostenenthalten()
    {
        return $this->portal_heizkostenenthalten;
    }

    public function getPortal_garageart()
    {
        return $this->portal_garageart;
    }

    public function getPortal_haustiere()
    {
        return $this->portal_haustiere;
    }

    public function getPortal_objektzustand()
    {
        return $this->portal_objektzustand;
    }

    public function getPortal_modernisierung()
    {
        return $this->portal_modernisierung;
    }

    public function getPortal_intquality()
    {
        return $this->portal_intquality;
    }

    public function getPortal_denkmalschutz()
    {
        return $this->portal_denkmalschutz;
    }

    public function getPortal_objektart()
    {
        return $this->portal_objektart;
    }

    public function getPortal_objektart_oi()
    {
        return $this->portal_objektart_oi;
    }

    public function getPortal_heatingType()
    {
        return $this->portal_heatingType;
    }

    public function getPortal_bodenbelag()
    {
        return $this->portal_bodenbelag;
    }

    public function getPortal_envquality()
    {
        return $this->portal_envquality;
    }

    public function getPortal_klimaanlage()
    {
        return $this->portal_klimaanlage;
    }

    public function getPortal_heizungsart()
    {
        return $this->portal_heizungsart;
    }

    public function getPortal_befeuerungsart()
    {
        return $this->portal_befeuerungsart;
    }

    public function getPortal_energietyp()
    {
        return $this->portal_energietyp;
    }

    public function getPortal_space()
    {
        return $this->portal_space;
    }

    public function getPortal_space_use()
    {
        return $this->portal_space_use;
    }

    public function getFlat_exposetitle_1()
    {
        return $this->flat_exposetitle_1;
    }

    public function getFlat_objectdescription_1()
    {
        return $this->flat_objectdescription_1;
    }

    public function getFlat_note_1()
    {
        return $this->flat_note_1;
    }

    public function getFlat_miscellaneous_1()
    {
        return $this->flat_miscellaneous_1;
    }

    public function getGw_bettwaesche()
    {
        return $this->gw_bettwaesche;
    }

    public function getGw_bettwaesche2()
    {
        return $this->gw_bettwaesche2;
    }

    public function getGw_bettwaesche3()
    {
        return $this->gw_bettwaesche3;
    }

    public function getGw_bettwaesche4()
    {
        return $this->gw_bettwaesche4;
    }

    public function getGw_bettwaesche5()
    {
        return $this->gw_bettwaesche5;
    }

    public function getGw_bettwaesche6()
    {
        return $this->gw_bettwaesche6;
    }

    public function getGw_bettwaesche_firma()
    {
        return $this->gw_bettwaesche_firma;
    }

    public function getGw_endreinigung()
    {
        return $this->gw_endreinigung;
    }

    public function getGw_endreinigung_firma()
    {
        return $this->gw_endreinigung_firma;
    }

    public function getGw_tag()
    {
        return $this->gw_tag;
    }

    public function getGw_tag2()
    {
        return $this->gw_tag2;
    }

    public function getGw_tag3()
    {
        return $this->gw_tag3;
    }

    public function getGw_tag4()
    {
        return $this->gw_tag4;
    }

    public function getErp_note()
    {
        return $this->erp_note;
    }

    public function getGw_satz()
    {
        return $this->gw_satz;
    }

    public function getGw_satz_nm()
    {
        return $this->gw_satz_nm;
    }

    public function getGw_waesche()
    {
        return $this->gw_waesche;
    }

    public function getGw_extras()
    {
        return $this->gw_extras;
    }

    public function getGw_maxpers()
    {
        return $this->gw_maxpers;
    }

    public function getGw_iban()
    {
        return $this->gw_iban;
    }

    public function getGw_rabatt()
    {
        return $this->gw_rabatt;
    }

    public function getDistanceAirport()
    {
        return $this->distanceAirport;
    }

    public function getDistanceMRS()
    {
        return $this->distanceMRS;
    }

    public function getDistanceFM()
    {
        return $this->distanceFM;
    }

    public function getDistancePT()
    {
        return $this->distancePT;
    }

    public function getHavarie_gas()
    {
        return $this->havarie_gas;
    }

    public function getHavarie_wasser()
    {
        return $this->havarie_wasser;
    }

    public function getHavarie_strom()
    {
        return $this->havarie_strom;
    }

    public function getHavarie_ha()
    {
        return $this->havarie_ha;
    }

    public function getHavarie_photo()
    {
        return $this->havarie_photo;
    }

    public function getHavarie_bemerkung()
    {
        return $this->havarie_bemerkung;
    }

    public function getFlat_instandh_einh()
    {
        return $this->flat_instandh_einh;
    }

    public function getLeergrdtext()
    {
        return $this->leergrdtext;
    }

    public function getPortal_ausstattung()
    {
        return $this->portal_ausstattung;
    }

    public function getId_extern()
    {
        return $this->id_extern;
    }

    public function getVerantwortlich_1()
    {
        return $this->verantwortlich_1;
    }

    public function getVerantwortlich_2()
    {
        return $this->verantwortlich_2;
    }

    public function getVerantwortlich_3()
    {
        return $this->verantwortlich_3;
    }

    public function getVerantwortlich_4()
    {
        return $this->verantwortlich_4;
    }

    public function getVerantwortlich_5()
    {
        return $this->verantwortlich_5;
    }

    public function getVerantwortlich_6()
    {
        return $this->verantwortlich_6;
    }

    public function getSchluessel_leerzylinder()
    {
        return $this->schluessel_leerzylinder;
    }

    public function getSchluessel_bauzylinder()
    {
        return $this->schluessel_bauzylinder;
    }

    public function getIv_externalID()
    {
        return $this->iv_externalID;
    }

    public function getAmortisationsdauer()
    {
        return $this->amortisationsdauer;
    }

    public function getAmortisationsgrund()
    {
        return $this->amortisationsgrund;
    }

    public function getAmortisationsbemerkung()
    {
        return $this->amortisationsbemerkung;
    }

    public function getFlat_video_link()
    {
        return $this->flat_video_link;
    }

    public function getFlat_search_results_note()
    {
        return $this->flat_search_results_note;
    }

    public function getReserve_id()
    {
        return $this->reserve_id;
    }

    public function getClient_id()
    {
        return $this->client_id;
    }

    public function getReserve_time()
    {
        return $this->reserve_time;
    }

    public function getReserve_info()
    {
        return $this->reserve_info;
    }

    public function getReserve_timestamp()
    {
        return $this->reserve_timestamp;
    }

    public function getReserve_author()
    {
        return $this->reserve_author;
    }

    public function getReserve_time_real()
    {
        return $this->reserve_time_real;
    }

    public function getInsertdatum()
    {
        return $this->insertdatum;
    }

    public function getDistrict_id()
    {
        return $this->district_id;
    }

    public function getDistrict_name()
    {
        return $this->district_name;
    }

    public function getDistrict_description()
    {
        return $this->district_description;
    }

    public function getDistrict_marker()
    {
        return $this->district_marker;
    }

    public function getDistrict_desc_print()
    {
        return $this->district_desc_print;
    }

    public function getDistrict_list_print()
    {
        return $this->district_list_print;
    }

    public function getDistrict_city()
    {
        return $this->district_city;
    }

    public function getDistrict_link()
    {
        return $this->district_link;
    }

    public function getHistory_id()
    {
        return $this->history_id;
    }

    public function getProcess_id()
    {
        return $this->process_id;
    }

    public function getTermin_id()
    {
        return $this->termin_id;
    }

    public function getAcceptance_id()
    {
        return $this->acceptance_id;
    }

    public function getLetter_id()
    {
        return $this->letter_id;
    }

    public function getContract_id()
    {
        return $this->contract_id;
    }

    public function getHistory_headline()
    {
        return $this->history_headline;
    }

    public function getHistory_text()
    {
        return $this->history_text;
    }

    public function getHistory_type()
    {
        return $this->history_type;
    }

    public function getHistory_agent()
    {
        return $this->history_agent;
    }

    public function getHistory_team_id()
    {
        return $this->history_team_id;
    }

    public function getHistory_object()
    {
        return $this->history_object;
    }

    public function getHistory_objectid()
    {
        return $this->history_objectid;
    }

    public function getHistory_timestamp()
    {
        return $this->history_timestamp;
    }

    public function getFavorit()
    {
        return $this->favorit;
    }

    public function getFavorit_agent()
    {
        return $this->favorit_agent;
    }

    public function getExport_id()
    {
        return $this->export_id;
    }

    public function getExport_type()
    {
        return $this->export_type;
    }

    public function getExport_date()
    {
        return $this->export_date;
    }

    public function getExport_status()
    {
        return $this->export_status;
    }

    public function getExport_arranger()
    {
        return $this->export_arranger;
    }

    public function getExport_timestamp()
    {
        return $this->export_timestamp;
    }

    public function getExport_exposeid()
    {
        return $this->export_exposeid;
    }

    public function getWe()
    {
        return $this->we;
    }

    public function getHousenr()
    {
        return $this->housenr;
    }

    public function getBemerkung()
    {
        return $this->bemerkung;
    }

    public function getHeizung_fremdanbieter()
    {
        return $this->heizung_fremdanbieter;
    }

    public function getHausansicht_hausprio()
    {
        return $this->hausansicht_hausprio;
    }

    public function getRendite()
    {
        return $this->rendite;
    }

    public function getRenditeerwartung()
    {
        return $this->renditeerwartung;
    }

    public function getBaseprice()
    {
        return $this->baseprice;
    }

    public function getMlat()
    {
        return $this->Mlat;
    }

    public function getMlng()
    {
        return $this->Mlng;
    }

    public function getFlat_rentdate()
    {
        return $this->flat_rentdate;
    }

    public function getTmp_flat_id()
    {
        return $this->tmp_flat_id;
    }

    public function getHistory_nof()
    {
        return $this->history_nof;
    }

    public function getDistrict_lat()
    {
        return $this->district_lat;
    }

    public function getDistrict_lon()
    {
        return $this->district_lon;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getRent_all()
    {
        return $this->rent_all;
    }

    public function getFlat_prices()
    {
        return $this->flat_prices;
    }

    public function getRent_plain()
    {
        return $this->rent_plain;
    }

    public function getRent()
    {
        return $this->rent;
    }

    public function getCharges()
    {
        return $this->charges;
    }

    public function getHeating()
    {
        return $this->heating;
    }

    public function getDeposit()
    {
        return $this->deposit;
    }

    public function getExtra()
    {
        return $this->extra;
    }

    public function getFlat_repair()
    {
        return $this->flat_repair;
    }

    public function getRepair()
    {
        return $this->repair;
    }

    public function getParking()
    {
        return $this->parking;
    }

    public function getParking_charges()
    {
        return $this->parking_charges;
    }

    public function getGarage()
    {
        return $this->garage;
    }

    public function getGarage_charges()
    {
        return $this->garage_charges;
    }

    public function getSpecial()
    {
        return $this->special;
    }

    public function getFlat_umbauwohnung()
    {
        return $this->flat_umbauwohnung;
    }

    public function getKeynumber()
    {
        return $this->keynumber;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function getStreet()
    {
        return $this->street;
    }

    public function getStreetnumber()
    {
        return $this->streetnumber;
    }

    public function getZip()
    {
        return $this->zip;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function getSpace()
    {
        return $this->space;
    }

    public function getRooms()
    {
        return $this->rooms;
    }

    public function getFloor()
    {
        return $this->floor;
    }

    public function getDirectionnr()
    {
        return $this->directionnr;
    }

    public function getDirection()
    {
        return $this->direction;
    }

    public function getArrangernr()
    {
        return $this->arrangernr;
    }

    public function getInternet()
    {
        return $this->internet;
    }

    public function getTerminal()
    {
        return $this->terminal;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function getRentdate()
    {
        return $this->rentdate;
    }

    public function getUsenr()
    {
        return $this->usenr;
    }

    public function getContract_date()
    {
        return $this->contract_date;
    }

    public function getContract_partner()
    {
        return $this->contract_partner;
    }

    public function getContract_number()
    {
        return $this->contract_number;
    }

    public function getArranger()
    {
        return $this->arranger;
    }

    public function getResponsible()
    {
        return $this->responsible;
    }

    public function getSpecial_text()
    {
        return $this->special_text;
    }

    public function getWbs()
    {
        return $this->wbs;
    }

    public function getWbs_note()
    {
        return $this->wbs_note;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getExposetitle()
    {
        return $this->exposetitle;
    }

    public function getNote()
    {
        return $this->note;
    }

    public function getObjectdescription()
    {
        return $this->objectdescription;
    }

    public function getMiscellaneous()
    {
        return $this->miscellaneous;
    }

    public function getNote_print()
    {
        return $this->note_print;
    }

    public function getObjectdescription_print()
    {
        return $this->objectdescription_print;
    }

    public function getMiscellaneous_print()
    {
        return $this->miscellaneous_print;
    }

    public function getTechnician()
    {
        return $this->technician;
    }

    public function getElectricmeter()
    {
        return $this->electricmeter;
    }

    public function getDescription_number()
    {
        return $this->description_number;
    }

    public function getVb()
    {
        return $this->vb;
    }

    public function getEnev_gebaeudetyp()
    {
        return $this->enev_gebaeudetyp;
    }

    public function getEnev_gebaeudeflaeche()
    {
        return $this->enev_gebaeudeflaeche;
    }

    public function getEnev_anz_we()
    {
        return $this->enev_anz_we;
    }

    public function getEnev_ausweisart()
    {
        return $this->enev_ausweisart;
    }

    public function getEnev_bedarfswert()
    {
        return $this->enev_bedarfswert;
    }

    public function getEnev_verbrauchswert()
    {
        return $this->enev_verbrauchswert;
    }

    public function getEnev_year_anlage()
    {
        return $this->enev_year_anlage;
    }

    public function getEnergyconsumption()
    {
        return $this->energyconsumption;
    }

    public function getEnev_gueltig_bis()
    {
        return $this->enev_gueltig_bis;
    }

    public function getEnev_warmwasserenthalten()
    {
        return $this->enev_warmwasserenthalten;
    }

    public function getEnev_warmwasserversorgung()
    {
        return $this->enev_warmwasserversorgung;
    }

    public function getLights()
    {
        return $this->lights;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getPlot()
    {
        return $this->plot;
    }

    public function getEnvironmet()
    {
        return $this->environmet;
    }

    public function getEnvironment_detail_1()
    {
        return $this->environment_detail_1;
    }

    public function getEnvironment_int()
    {
        return $this->environment_int;
    }

    public function getEnvironment_raum()
    {
        return $this->environment_raum;
    }

    public function getEnvironment_gemeinschaftl()
    {
        return $this->environment_gemeinschaftl;
    }

    public function getEnvironment_umgebung()
    {
        return $this->environment_umgebung;
    }

    public function getEnvironment_technik()
    {
        return $this->environment_technik;
    }

    public function getEnvironments()
    {
        return $this->environments;
    }

    public function getArranger_name()
    {
        return $this->arranger_name;
    }

    public function getArranger_phone()
    {
        return $this->arranger_phone;
    }

    public function getArranger_fax()
    {
        return $this->arranger_fax;
    }

    public function getArranger_email()
    {
        return $this->arranger_email;
    }

    public function getGallery_img()
    {
        return $this->gallery_img;
    }
}
