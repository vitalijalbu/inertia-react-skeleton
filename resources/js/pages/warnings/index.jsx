import React, { useState, useEffect } from "react";
import { Avatar, Button, Space, Table, Typography } from "antd";
const { Text } = Typography;
import PageActions from "@/shared/components/page-actions";
import { Link } from "@inertiajs/react";
import { dateTimeFormatter } from "@/helpers/formatter";
import { IconUserFilled } from "@tabler/icons-react";
import Filters from "@/shared/adsets/filters";

const Index = (props) => {
    const { data, isLoading } = props;

    /*
    120208058294410737
    120208117631180615
    120208117631820615
    120208117630910615
    */
    return (
        <div className="page">
            <PageActions title="Adsets" subtitle="Paste here one or more adset id (one per row)">
                <Filters/>
                </PageActions>
            <div className="page-content">

        </div>
        </div>
    );
};

export default Index;
