export const geojson = {
    type: "FeatureCollection",
    features: [
        {
            type: "Feature",
            properties: {
                message: "Foo",
                iconSize: [40, 40],
                name: "Secours Populaire",
                size: 18,
            },
            geometry: {
                type: "Point",
                coordinates: [-0.57918, 44.837789],
            },
        },
        {
            type: "Feature",
            properties: {
                message: "Foo",
                iconSize: [40, 40],
                name: "Les resto du coeur",
                size: 20,
            },
            geometry: {
                type: "Point",
                coordinates: [-0.60, 44.834],
            },
        },
        {
            type: "Feature",
            properties: {
                message: "Foo",
                iconSize: [40, 40],
                name: "La croix rouge",
                size: 0,
            },
            geometry: {
                type: "Point",
                coordinates: [-0.65, 44.854],
            },
        },
    ],
};
