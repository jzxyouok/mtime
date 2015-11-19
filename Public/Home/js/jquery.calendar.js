(function ($) {
    //SELECT�ؼ����ú���
    function setSelectControl(oSelect, iStart, iLength, iIndex) {
        oSelect.empty();
        for (var i = 0; i < iLength; i++) {
            if ((parseInt(iStart) + i) == iIndex)
                oSelect.append("<option selected='selected' value='" + (parseInt(iStart) + i) + "'>" + (parseInt(iStart) + i) + "</option>");
            else
                oSelect.append("<option value='" + (parseInt(iStart) + i) + "'>" + (parseInt(iStart) + i) + "</option>");
        }
    }
 
    $.fn.DateSelector = function (options) {
        options = options || {};
 
        //��ʼ��
        this._options = {
            ctlYearId: null,
            ctlMonthId: null,
            ctlDayId: null,
            defYear: 0,
            defMonth: 0,
            defDay: 0,
            minYear: 1882,
            maxYear: new Date().getFullYear()
        }
 
        for (var property in options) {
            this._options[property] = options[property];
        }
 
        this.yearValueId = $("#" + this._options.ctlYearId);
        this.monthValueId = $("#" + this._options.ctlMonthId);
        this.dayValueId = $("#" + this._options.ctlDayId);
 
        var dt = new Date(),
        iMonth = parseInt(this.monthValueId.attr("data") || this._options.defMonth),
        iDay = parseInt(this.dayValueId.attr("data") || this._options.defDay),
        iMinYear = parseInt(this._options.minYear),
        iMaxYear = parseInt(this._options.maxYear);
                 
        this.Year = parseInt(this.yearValueId.attr("data") || this._options.defYear) || dt.getFullYear();
        this.Month = 1 <= iMonth && iMonth <= 12 ? iMonth : dt.getMonth() + 1;
        this.Day = iDay > 0 ? iDay : dt.getDate();
        this.minYear = iMinYear && iMinYear < this.Year ? iMinYear : this.Year;
        this.maxYear = iMaxYear && iMaxYear > this.Year ? iMaxYear : this.Year;
 
        //��ʼ���ؼ�
        //������
        setSelectControl(this.yearValueId, this.minYear, this.maxYear - this.minYear + 1, this.Year);
        //������
        setSelectControl(this.monthValueId, 1, 12, this.Month);
        //������
        var daysInMonth = new Date(this.Year, this.Month, 0).getDate(); //��ȡָ�����µĵ�������[new Date(year, month, 0).getDate()]
        if (this.Day > daysInMonth) { this.Day = daysInMonth; };
        setSelectControl(this.dayValueId, 1, daysInMonth, this.Day);
 
        var oThis = this;
        //�󶨿ؼ��¼�
        this.yearValueId.change(function () {
            oThis.Year = $(this).val();
            setSelectControl(oThis.monthValueId, 1, 12, oThis.Month);
            oThis.monthValueId.change();
        });
        this.monthValueId.change(function () {
            oThis.Month = $(this).val();
            var daysInMonth = new Date(oThis.Year, oThis.Month, 0).getDate();
            if (oThis.Day > daysInMonth) { oThis.Day = daysInMonth; };
            setSelectControl(oThis.dayValueId, 1, daysInMonth, oThis.Day);
        });
        this.dayValueId.change(function () {
            oThis.Day = $(this).val();
        });
    }
})(jQuery);