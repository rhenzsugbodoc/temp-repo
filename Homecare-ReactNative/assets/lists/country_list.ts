export interface City {
  name: string;
}

export interface Province {
  name: string;
  cities: string[];
}

export interface Country {
  name: string;
  provinces: Province[];
}

export const countries: Country[] = [
  {
    name: "Philippines",
    provinces: [
      {
        name: "Metro Manila",
        cities: [
          "Caloocan",
          "Las Piñas",
          "Makati",
          "Malabon",
          "Mandaluyong",
          "Marikina",
          "Muntinlupa",
          "Navotas",
          "Parañaque",
          "Pasay",
          "Pasig",
          "Quezon City",
          "San Juan",
          "Taguig",
          "Valenzuela"
        ]
      },
      {
        name: "Cebu",
        cities: [
          "Cebu City",
          "Mandaue",
          "Lapu-Lapu"
        ]
      }
    ]
  },
  {
    name: "Singapore",
    provinces: [
      {
        name: "Central Region",
        cities: [
          "Orchard",
          "Marina Bay",
          "Bukit Timah"
        ]
      },
      {
        name: "East Region",
        cities: [
          "Tampines",
          "Pasir Ris"
        ]
      }
    ]
  }
];
